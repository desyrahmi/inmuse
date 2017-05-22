<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Review;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Auth;
use Validator;
use Hash;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        $reviewAvgs = Review::with('album')->select('*', DB::raw('avg(rating) as rating'))
            ->groupBy('album_id')->orderBy('rating', 'desc')->get();
        $topAlbum = $reviewAvgs[0]->album;
        $topAlbum->rating = $reviewAvgs[0]->rating;
        $albums = Album::orderBy('release', 'desc')->paginate(6);
        for ($idx = 0; $idx < count($albums); $idx++) {
            $albums[$idx]->rating = 0;
            foreach ($reviewAvgs as $reviewAvg) {
                if ($reviewAvg->album->id === $albums[$idx]->id) {
                    $albums[$idx]->rating = $reviewAvg->rating;
                }
            }
        }
        return view('index', ['albums' => $albums, 'topAlbum' => $topAlbum]);
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
                Session::flash('success', 'Sukses login');
                $role = Auth::user()->role;
                if($role=='admin')
                    return redirect()->route('admin.index');
                else if($role=='user')
                    return redirect()->route('index');
            } elseif(Auth::attempt(array('username' => $userdata['user'], 'password' => $userdata['password']), true)) {
                Session::flash('success', 'Sukses login');
                $role = Auth::user()->role;
                if($role=='admin')
                    return redirect()->route('admin.index');
                else if($role=='user')
                    return redirect()->route('index');
            } else {
                Session::flash('fail', 'Gagal login');
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
