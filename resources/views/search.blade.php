@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
@include('base.navbar')
@endsection

@section('content')
<div class="row">
    <div class="col-xs-9">

    </div>
    <div class="col-xs-3">
        <h4>Top Rated</h4>
        <hr>
        @foreach($albums->slice(0, 1) as $album)
        <div class="col-xs-12">
            <div class="home-post">
                <div class="post-image">
                    <img class="max-img" src="{{URL::asset('img/album_'.$album->id .'.jpg')}}" alt="" height="215px" width="233px;">
                </div>
                <div class="post-meta">
                    <span class="date">{{$album->release}}</span>
                    <span class="tags"><a href="#">{{$album->artist}}</a></span>
                </div>
                <div class="entry-content">
                    <h5><strong><a href={{route('album.detail', ['id' => $album->id])}}>{{$album->title}}</a></strong></h5>
                    <p>
                        {{ str_limit($album->review, 100) }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
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
