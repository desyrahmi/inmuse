<?php

namespace App\Http\Controllers;

use App\Song;
use App\Album;
use App\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;
use DB;
use App\Http\Controllers\Controller;

class SongController extends Controller
{
    public function index(){
        $songs= Song::with('album')->orderBy('title', 'asc')->paginate(10);
        return view('listsong',['songs' => $songs]);
    }

    public function addIndex(){
        $albums = Album::orderBy('title', 'asc')->get();
        return view('form.addsong', ['albums' => $albums]);
    }

    public function create(Request $request){
        $rules = array(
            'title' => 'required',
            'album_id' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan album');
            return redirect()->route('add.album.index');
        }
        $song = new Song();
        $song->title = $request->title;
        $song->album_id= $request->album_id;
        if($request->duration != null){
            $song->duration = $request->duration;
        }
        $song->save();

        if($song->save()){
            Session::flash('success', 'album berhasil ditambahkan');
            return redirect()->route('list.album');
        } else {
            Session::flash('fail', 'Gagal menambahkan album');
            return redirect()->route('add.song.index');
        }
    }

    public function delete($id){
        $song = Song::find($id);
        $song->delete();
        return redirect()->route('list.song');
    }
}
