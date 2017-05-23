<?php

namespace App\Http\Controllers;

use App\Album;
use App\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::orderBy('artist', 'asc')->paginate(10);
        return view('listalbum',['albums' => $albums]);
    }

    public function addIndex(){
        return view('form.addalbum');
    }

    public function create(Request $request){
        $rules = array(
            'title' => 'required',
            'artist' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan album');
            return redirect()->route('add.album.index');
        }

        //
        $album = new Album();
        $album->title = $request->title;
        $album->review = $request->review;
        $album->artist = $request->artist;
        $album->release = $request->release;
        $album->save();

        $file = $request->file('photoalbum');
        if ( $file !== null) {
            $photoalbumName = 'album_'.$album->id .'.jpg';
            $file->move(public_path('img'), $photoalbumName);
            $album->photo = $photoalbumName;
            $album->save();
        }
        if($album->save()){
            Session::flash('success', 'album berhasil ditambahkan');
            return redirect()->route('list.album');
        } else {
            Session::flash('fail', 'Gagal menambahkan album');
            return redirect()->route('add.album.index');
        }
    }

    public function delete($id){
        $album = Album::find($id);
        $album->delete();
        return redirect()->route('list.album');
    }
}
