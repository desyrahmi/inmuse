<?php
namespace App\Http\Controllers;
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
            'retype-password' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->route('auth.register')
                ->withErrors($validator);
        }
        else{
            if($request->input['retype-password'] != $request->input['password']){
                return redirect()->route('auth.register')
                    ->withErrors("Password miss matches");
            }
            $check_username = User::where('username', '=', $request->username)->first();
            $check_email = User::where('email', '=', $request->email)->first();
            if($check_username){
                Session::flash('fail', 'Username sudah terdaftar.');
                return redirect()->route('auth.register');
            } else if ($check_email){
                Session::flash('fail', 'Email sudah terdaftar.');
                return redirect()->route('auth.register');
            } else{
                $user = new User();
                $user->name = $request->name;
                $user->username = $request->username;
                $user->email = $request->email;
                if($request->phone != null){
                    $user->phone = $request->phone;
                } else {
                    $user->phone = '-';
                }
                $user->password = Hash::make($request->password);
                if($request->role != null){
                    $user->role = $request->role;
                } else {
                    $user->role = 'user';
                }
                if($user->save()){
                    return redirect()->route('index');
                } else {
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

    public function showProfile($username){
        $user = User::where('username', '=', $username)->first();
        return view('profile', ['user' => $user]);
    }

    public function showEditForm($id)
    {
        $user = User::find($id);
        return view('form.editprofile', ['user' => $user]);
    }

    public function update(Request $request){
        $fields = array('name', 'phone', 'email', 'password');
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