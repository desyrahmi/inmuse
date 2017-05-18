@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-9">
            <h4>Discover</h4>
            <hr>
            <div class="grid">
                @foreach($albums->slice(0, 9) as $album)
                <figure class="effect-zoe">
                    <img src="{{URL::asset('img/album_'.$album->id .'.jpg')}}" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">{{$album->title}}</a></strong></h5>
                    </figcaption>
                </figure>
                @endforeach
            </div>
        </div>
        <div class="col-xs-3">
            <h4>Recent Release</h4>
            <hr>
            <div class="grid">
                @foreach($albums->slice(0, 2) as $album)
                    <figure class="effect-zoe">
                    <img src="{{URL::asset('img/album_'.$album->id .'.jpg')}}" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">{{$album->title}}</a></strong></h5>
                    </figcaption>
                </figure>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection