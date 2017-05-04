<?php

namespace App\Http\Controllers;

use App\User;
use App\Album;
use App\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        $albums = Album::get();
        return view('index',['albums' => $albums]);
    }

//    public function showAlbum($id){
//        $album = Album::find($id);
//        return view('album',['album'=> $album]);
//    }

    public function showAlbum(){
//        $album = Album::find($id);
        return view('album');
    }

    public function people(){
//        $review = Review::get();
        return view('people');
    }

    public function discover(){
//        $albums = Album::get();
//        return view('discover', ['albums' => $albums]);
        return view('discover');
    }
}
