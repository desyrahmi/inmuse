<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;

class AlbumController extends Controller
{
    public function addIndex(){
        return view('form.album');
    }

    public function create(){
//        dd(Auth::user()->id);
        $rules = array(
            'name' => 'required',
            'review' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan album');
            return redirect()->route('album.add.index');
        }

        $data = Input::all();

        $album = new Album();
        $album->name = $data['name'];
        $album->review = $data['review'];
        // $album->photo_id = $data['description'];
        // $album->user_id = Auth::user()->id;

        if($album->save()){
            Session::flash('success', 'album berhasil ditambahkan');
            return redirect()->route('album.add.index');
        } else {
            Session::flash('fail', 'Gagal menambahkan album');
            return redirect()->route('album.add.index');
        }
    }

    public function index(){
        $albums = Album::get();
        return view('album',['albums' => $albums]);
    }

    public function delete($id){
        $album = Album::find($id);
        $album->delete();

        return redirect()->route('album.show');
    }
}
