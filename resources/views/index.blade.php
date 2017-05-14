@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-9">
            <h4>New Release</h4>
            <hr>
            <div class="col-xs-4">
                <div class="home-post">
                    <div class="post-image">
                        <img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" height="215px" width="252px;">
                    </div>
                    <div class="post-meta">
                        <span class="date">June 19, 2013</span>
                        <span class="tags"><a href="#">Efek Rumah Kaca</a></span>
                    </div>
                    <div class="entry-content">
                        <h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="home-post">
                    <div class="post-image">
                        <img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" height="215px" width="252px;">
                    </div>
                    <div class="post-meta">
                        <span class="date">June 19, 2013</span>
                        <span class="tags"><a href="#">Efek Rumah Kaca</a></span>
                    </div>
                    <div class="entry-content">
                        <h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="home-post">
                    <div class="post-image">
                        <img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" height="215px" width="252px;">
                    </div>
                    <div class="post-meta">
                        <span class="date">June 19, 2013</span>
                        <span class="tags"><a href="#">Efek Rumah Kaca</a></span>
                    </div>
                    <div class="entry-content">
                        <h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <h4>Top Rated</h4>
            <hr>
            <div class="col-xs-12">
                <div class="home-post">
                    <div class="post-image">
                        <img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" height="215px" width="233px;">
                    </div>
                    <div class="post-meta">
                        <span class="date">June 19, 2013</span>
                        <span class="tags"><a href="#">Efek Rumah Kaca</a></span>
                    </div>
                    <div class="entry-content">
                        <h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-9">
            <h4>New Release</h4>
            <hr>
            <div class="col-xs-4">
                <div class="home-post">
                    <div class="post-image">
                        <img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" height="215px" width="252px;">
                    </div>
                    <div class="post-meta">
                        <span class="date">June 19, 2013</span>
                        <span class="tags"><a href="#">Efek Rumah Kaca</a></span>
                    </div>
                    <div class="entry-content">
                        <h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="home-post">
                    <div class="post-image">
                        <img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" height="215px" width="252px;">
                    </div>
                    <div class="post-meta">
                        <span class="date">June 19, 2013</span>
                        <span class="tags"><a href="#">Efek Rumah Kaca</a></span>
                    </div>
                    <div class="entry-content">
                        <h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="home-post">
                    <div class="post-image">
                        <img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" height="215px" width="252px;">
                    </div>
                    <div class="post-meta">
                        <span class="date">June 19, 2013</span>
                        <span class="tags"><a href="#">Efek Rumah Kaca</a></span>
                    </div>
                    <div class="entry-content">
                        <h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <h4>Top Rated</h4>
            <hr>
            <div class="col-xs-12">
                <div class="home-post">
                    <div class="post-image">
                        <img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" height="215px" width="233px;">
                    </div>
                    <div class="post-meta">
                        <span class="date">June 19, 2013</span>
                        <span class="tags"><a href="#">Efek Rumah Kaca</a></span>
                    </div>
                    <div class="entry-content">
                        <h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
