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
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="col-xs-3">
            <h4>Recent Release</h4>
            <hr>
            <div class="grid">
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
                <figure class="effect-zoe">
                    <img src="img/u345.jpg" alt="img25" width="100%" height="215px">
                    <figcaption>
                        <h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection