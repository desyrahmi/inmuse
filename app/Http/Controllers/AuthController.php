<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use Auth;
use Validator;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        $albums = Album::get();
        return view('index',['albums' => $albums]);
    }

    public function register(){
        return view('form.register');
    }

    public function doLogin(Request $request)
    {
        $rules = array(
            'user' => 'required',
            'password' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            echo 'gagal lewat validator';
            return view('index')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $userdata = array(
                'user' => $request->user,
                'password' => $request->password
            );
            if (Auth::attempt(array('email' => $userdata['user'], 'password' => $userdata['password']), true)) {
                $role = Auth::user()->role;
                if($role=='admin')
                    return redirect()->route('admin.index');
                else if($role=='user')
                    return redirect()->route('index');
            } elseif(Auth::attempt(array('username' => $userdata['user'], 'password' => $userdata['password']), true)) {
                $role = Auth::user()->role;
                if($role=='admin')
                    return redirect()->route('admin.index');
                else if($role=='user')
                    return redirect()->route('index');
            } else {
                echo 'gagal login';
                return redirect()->route('index')
                ->withErrors(['Email/Username atau Password salah'])
                    ->withInput(Input::except('password'));
            }
        }
    }

    public function doLogout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
