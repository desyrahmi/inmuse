<?php
namespace App\Http\Controllers;
use App\Role;
use App\User;
use App\Photo;
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

    public function create(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'retype-password' => 'required',
            'phone',
            'role_id'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return dd("gagal lewat validator");
            return redirect()->route('auth.register')
                ->withErrors($validator);
        }
        else{
//            $data = $request->all();
            if($request->input['retype-password'] != $request->input['password']){
                return dd("password miss matches");
                return redirect()->route('auth.register')
                    ->withErrors("Password miss matches");
            }
            $check_username = User::where('username', '=', $request->input['username'])->first();
            $check_email = User::where('email', '=', $request->input['email'])->first();
            if($check_username){
                Session::flash('fail', 'Email sudah terdaftar.');
                return redirect()->route('auth.register');
            } elseif ($check_email){
                Session::flash('fail', 'Username sudah terdaftar.');
                return redirect()->route('auth.register');
            } else{
                $user = new User($request->all());
//                $user->name = $request->input['name'];
//                $user->username = $request->input['username'];
//                $user->email = $request->input['email'];
                if($request->input['phone'] != null){
                    $user->phone = $request->input['phone'];
                } else {
                    $user->phone = '-';
                }
                $user->password = Hash::make($request->input['password']);
                if($request->input['role_id'] != null){
                    $user->role_id = $request->input['role_id'];
                } else {
                    $user->role_id = 2;
                }
                if($user->save()){
                    return redirect()->route('auth.index');
                } else {
                    return dd("masih salah");
                    return redirect()->route('auth.register');
                }
            }
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

//    public function showProfile($id){
//        $user = User::find($id);
//        return view('profile', ['user' => $user]);
//    }
    public function showProfile($username){
        $user = User::where('username', '=', $username)->first();
        return view('profile', ['user' => $user]);
    }

    public function showEditForm($id)
    {
        $user = User::find($id);
        return view('profile', ['user' => $user]);
    }

    public function update(Request $request){
        $fields = array('name', 'phone', 'email', 'password');
//        return dd($request);
        $user = User::find($request->id);
        forEach($fields as $field) {
            if ($request[$field]) {
                if ($field === 'password') {
                    // exceptional for password
                    $user[$field] = Hash::make($request[$field]);
                } else  {
                    $user[$field] = $request[$field];
                }
            }
        }
        $user->save();

        if ($request->photo !== null) {
            $photoName = $user->id . '.jpg';
            $photo = new Photo();
            $photo->name = $photoName;
            $photo->extension = 'jpg';
            $photo->save();
            $request->photo->move(public_path('img'), $photoName);
            $user->photo_id = $photo->id;
            $user->save();
        }
        return redirect()->route('user.edit.show', ['id' => $request->id]);
    }
}