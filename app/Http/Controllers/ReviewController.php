<?php

namespace App\Http\Controllers;

use App\Review;
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
    public function index(){
        $reviews = Review::with('album')->with('user')->paginate(10);
        return view('listreview', ['reviews' => $reviews]);
    }
    public function create(Request $request){
        $rules = array(
            'comment' => 'required',
            'rating' => 'required'
        );

        $album_id = $request->id;
        $user_id = Auth::user()->id;

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            Session::flash('fail', 'Validator fail');
            return redirect()->route('album.detail', ['id' => $request->id]);
        }
        $review = new Review();
        $review->album_id = $album_id;
        $review->user_id = $user_id;
        $review->comment = $request->comment;
        $review->rating = (int) $request->rating;
        $review->save();
        if($review->save()){
            return redirect()->route('album.detail', ['id' => $request->id]);
        } else {
            Session::flash('fail', 'Gagal menambahkan review');
            return redirect()->route('album.detail', ['id' => $request->id]);
        }
    }
    public function delete($id){
        $album = Review::find($id);
        $album->delete();
        return redirect()->route('list.review');
    }
}
