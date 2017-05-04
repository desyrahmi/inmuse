<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addIndex()
    {
        return view('form.adduser');
    }

    public function create()
    {
        $rules = array(
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            Session::flash('fail', 'Gagal menambahkan user');
            return redirect()->route('user.add.index');
        }

        $data = Input::all();

        if (User::where('email', $data['email'])->count() > 0) {
            Session::flash('fail', 'Gagal menamnahkan user.');
            return redirect()->route('user.add.index');
        } elseif (User::where('username', $data['username'])->count() > 0) {
            Session::flash('fail', 'Gagal menamnahkan user.');
            return redirect()->route('user.add.index');
        }

        $user = new User();
        $user->name = $data['name'];
        $user->username = $data['username'];
        if (Input::get('phone')!=null) {
            $user->phone = $data['phone'];
        } else {
            $user->phone = "-";
        }
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        if (Input::get('role_id')!=null) {
            $user->role_id = $data['role_id'];
        } else {
            $user->role_id = 2;
        }

        if ($user->save()) {
            Session::flash('success', 'User berhasil ditambahkan');
            return redirect()->route('user.add.index');
        } else {
            Session::flash('fail', 'Gagal menambahkan user');
            return redirect()->route('user.add.index');
        }
    }

    public function index()
    {
        $users = User::get();
        return view('userlist', ['users' => $users]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.show');
    }

    public function showProfile($id){
        $user = User::find($id);
        return view('profile', ['user' => $user]);
    }

    public function showEditForm($id)
    {
        $user = User::find($id);
        return view('form.updateuser', ['user' => $user]);
    }

    public function update($id)
    {
        $rules = array(
            'name' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
//            'role_id' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        $data = Input::all();
        if ($validator->fails()) {
            Session::flash('fail', 'Gagal mengupdate user');
            return redirect()->route('user.edit.show',['id'=>$id]);
        }

        $user = User::find($id);
        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user -> save();

        return redirect()->route('user.edit.show', ['id' => $id]);
    }
}
