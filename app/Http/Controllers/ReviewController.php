<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index($id){
        $album= Album::find($id);
        $songs = Song::with('album')->get();
        return view('album',['album'=> $album, 'songs' => $songs]);
    }
}
