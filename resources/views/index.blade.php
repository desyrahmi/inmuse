@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-9">
            <h3>New Release</h3>
            <hr>
            @foreach($albums as $album)
                <div class="col-xs-4" style="padding-bottom: 15px;">
                    <div class="home-post">
                        <div class="post-image">
                            <img class="max-img" src="{{URL::asset('img/album_'.$album->id .'.jpg')}}" alt="" height="215px" width="252px;">
                        </div>
                        <div class="post-meta">
                            <span class="date">{{$album->release}}</span>
                            <span class="tags"><a href="#">{{str_limit($album->artist, 20)}}</a></span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href="{{route('album.detail', ['id' => $album->id])}}">{{$album->title}}</a></strong></h5>
                            <div class="indexRatingStar {{$album->id}}" id="rateYo" ratingValue="{{$album->rating}}" albumId="{{$album->id}}"></div>
                            <p>
                                {{ str_limit($album->review, 100) }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-xs-3">
            <h3>Top Rated</h3>
            <hr>
                <div class="col-xs-12">
                    <div class="home-post">
                        <div class="post-image">
                            <img class="max-img" src="{{URL::asset('img/album_'.$topAlbum->id .'.jpg')}}" alt="" height="215px" width="233px;">
                        </div>
                        <div class="post-meta">
                            <span class="date">{{$topAlbum->release}}</span>
                            <span class="tags"><a href="#">{{$topAlbum->artist}}</a></span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href={{route('album.detail', ['id' => $topAlbum->id])}}>{{$topAlbum->title}}</a></strong></h5>
                            <div class="indexRatingStar {{$topAlbum->id}}" id="rateYo" ratingValue="{{$topAlbum->rating}}" albumId="{{$topAlbum->id}}"></div>
                            <p>
                                {{ str_limit($topAlbum->review, 100) }}
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-9">
            <div class="text-center">
                {{$albums->render()}}
            </div>
        </div>
        <div class="col-xs-3"></div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
