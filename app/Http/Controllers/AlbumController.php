<?php

namespace App\Http\Controllers;

use App\Album;
use App\Role;
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
        return view('form.addalbum');
    }

    public function create(Request $request){
        $rules = array(
            'title' => 'required',
            'review',
            'artist' => 'required',
            'release'
        );

        $validator = Validator::make($request, $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan album');
            return redirect()->route('add.album.index');
        }

        //
        $album = new Album();
        $album->title = $request['title'];
        $album->review = $request['review'];
        $album->artist = $request['artist'];
        $album->release = $request['release'];
        $album->save();

        if ($request->photo !== null) {
            $photoName = 'album_'.$album->id . '.jpg';
            $photo = new Photo();
            $photo->name = $photoName;
            $photo->extension = 'jpg';
            $photo->save();
            $request->photo->move(public_path('img'), $photoName);
            $album->photo_id = $photo->id;
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

    public function index(){
        $albums = Album::get();
        return view('listalbum',['albums' => $albums]);
    }

    public function delete($id){
        $album = Album::find($id);
        $album->delete();

        return redirect()->route('album.show');
    }
}
