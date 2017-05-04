<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use Auth;
use Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
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

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            echo 'gagal lewat validator';
            return view('index')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $userdata = array(
                'user' => Input::get('user'),
                'password' => Input::get('password')
            );

            if (Auth::attempt(array('email' => $userdata['user'], 'password' => $userdata['password']), true)) {
                echo 'berhasil login';
                return redirect()->route('index');
            } elseif(Auth::attempt(array('username' => $userdata['user'], 'password' => $userdata['password']), true)) {
                echo 'berhasil login';
                return redirect()->route('index');
            } else {
                echo 'gagal login';
                return view('index')
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
