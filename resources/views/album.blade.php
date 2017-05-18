@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-4">
            <div class="center-block">
                <img src="{{URL::asset('img/album_'.$album->id .'.jpg')}}" alt="lala" width="250px" height="250px"/>
            </div>
        </div>
        <div class="col-xs-8">
            <h4>{{$album->title}}</h4>
            <h3>{{$album->artist}}</h3>
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab"> Overview</a></li>
                    <li><a href="#two" data-toggle="tab">User Review</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="one">
                        <br>
                        <p>{{$album->review}}</p>
                    </div>
                    <div class="tab-pane" id="two">
                        <br>
                        <p>
                            Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
                        </p>
                        <p>
                            Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <h4>Song List</h4>
            <table class="table table-user-information">
                <thead>
                <tr>
                    {{--<th>No.</th>--}}
                    <th>Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($songs as $song)
                    {{--@for($i = 1; $i <= )--}}
                    <tr>
                        {{--<td></td>--}}
                        <td>{{$song->title}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-xs-1"></div>
        <div class="col-xs-7">
            <h4>Review</h4>
            <div class="row pb-cmnt-container">
                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <form action="" method="post">
                                <textarea style="width: 100%;" placeholder="Write your review here!" class="pb-cmnt-textarea" name="comment"></textarea>
                                <a href="{{route('album.detail', ['id' => $album->id])}}" class="btn btn-primary pull-right">Share</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="{{URL::asset('img/1.jpg')}}" class="img-circle avatar" alt="user profile image" height="250px" width="250px">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <b>Ryan Haywood</b>
                            made a post.
                        </div>
                        <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                </div>
                <div class="post-description">
                    <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
                </div>
            </div>
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="{{URL::asset('img/1.jpg')}}" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <b>Ryan Haywood</b>
                            made a post.
                        </div>
                        <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                </div>
                <div class="post-description">
                    <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
                </div>
            </div>
        </div>
        <div class="col-xs-1"></div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
