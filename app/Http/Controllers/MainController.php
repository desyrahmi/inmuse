<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use App\Album;
use App\Review;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use Validator;
use Session;
use Hash;

class MainController extends Controller
{
    public function index(){
        $albums = Album::get();
        return view('index',['albums' => $albums]);
    }

    public function adminIndex(){
        return view('dashboard');
    }

    public function showAlbum($id){
        $showAlbum= Album::find($id);
        return view('album',['showAlbum'=> $showAlbum]);
    }

//    public function showAlbum(){
////        $album = Album::find($id);
//        return view('album');
//    }

    public function people(){
//        $review = Review::get();
        return view('people');
    }

    public function discover(){
        $albums = Album::get();
        return view('discover', ['albums' => $albums]);
    }
}
