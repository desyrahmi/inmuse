<?php

namespace App\Http\Controllers;

use App\Song;
use App\Album;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;

class SongController extends Controller
{
    public function addIndex(){
        return view('form.addsong');
    }

    public function create(Request $request){
        $rules = array(
            'title' => 'required',
            'album_id' => 'required',
            'duration'
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan album');
            return redirect()->route('add.album.index');
        }

        //
        $song = new Song();
        $song->title = $request->title;
        $song->album_id= $request->album_id;
        $song->artist = $request->duration;
//        return dd($album);
        $song->save();

        if($song->save()){
            Session::flash('success', 'album berhasil ditambahkan');
            return redirect()->route('list.album');
        } else {
            Session::flash('fail', 'Gagal menambahkan album');
            return redirect()->route('add.song.index');
        }
    }

    public function index(){
        $albums = Song::get();
        return view('listsong',['albums' => $albums]);
    }

    public function delete($id){
        $album = Album::find($id);
        $album->delete();
        return redirect()->route('list.album');
    }
}
