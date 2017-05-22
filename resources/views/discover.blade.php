@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-9">
            <h3>Discover</h3>
            <hr>
            <div class="grid">
                @foreach($albums as $album)
                <figure class="effect-zoe">
                    <img src="{{URL::asset('img/album_'.$album->id .'.jpg')}}" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail', ['id' => $album->id])}}">{{$album->title}}</a></strong></h5>
                    </figcaption>
                </figure>
                @endforeach
            </div>
        </div>
        <div class="col-xs-3">
            <h3>Recent Release</h3>
            <hr>
            <div class="grid">
                @foreach($albums1->slice(0, 2) as $album1)
                    <figure class="effect-zoe">
                    <img src="{{URL::asset('img/album_'.$album1->id .'.jpg')}}" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail', ['id' => $album1->id])}}">{{$album1->title}}</a></strong></h5>
                    </figcaption>
                </figure>
                @endforeach
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