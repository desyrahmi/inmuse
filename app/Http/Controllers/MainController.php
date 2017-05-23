<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use App\Song;
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

    public function search(Request $request){
        $search = $request->search;
        $query = Album::where('title', 'like', '%'.$search.'%')
            ->orWhere('artist','LIKE','%'.$search.'%')->orderBy('title', 'asc')->paginate(6);
        $reviewAvgs = Review::with('album')->select('*', DB::raw('avg(rating) as rating'))
            ->groupBy('album_id')->orderBy('rating', 'desc')->get();
        $topAlbum = $reviewAvgs[0]->album;
        $topAlbum->rating = $reviewAvgs[0]->rating;
        for ($idx = 0; $idx < count($query); $idx++) {
            $query[$idx]->rating = 0;
            foreach ($reviewAvgs as $reviewAvg) {
                if ($reviewAvg->album->id === $query[$idx]->id) {
                    $query[$idx]->rating = $reviewAvg->rating;
                }
            }
        }
        return view('search', ['searchs' => $query, 'topAlbum' => $topAlbum, 'search' => $search]);
    }

    public function adminIndex()
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
        return view('dashboard', ['albums' => $albums, 'topAlbum' => $topAlbum]);
    }

    public function showAlbum($id)
    {
        $album = Album::find($id);
        $averageRating = Review::where('album_id', $id)->avg('rating');
//        return dd($averageRating);
        $reviews = Review::with('album')->with('user')->where('album_id', '=', $id)->paginate(5);
        $songs = Song::with('album')->where('album_id', '=', $id)->get();
//        return dd($reviews[0]->user->name);
        return view('album', ['album' => $album, 'songs' => $songs, 'reviews' => $reviews, 'avgrating' => $averageRating]);
    }

    public function people()
    {
        $reviews = Review::with('user')->with('album')->paginate(12);
//        return dd($reviews[2]->album->title);
        return view('people', ['reviews' => $reviews]);
    }

    public function discover()
    {
        $albums = Album::orderBy('artist', 'asc')->paginate(9);
        $albums1 = Album::orderBy('release', 'dessc')->get();
        return view('discover', ['albums' => $albums, 'albums1' => $albums1]);
    }
}
