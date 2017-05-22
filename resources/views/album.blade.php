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
            <div class="ratingStar" id="rateYo" avgRating="{{$avgrating}}"></div>
            <br>
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab"> Overview</a></li>
                    <li><a href="#two" data-toggle="tab">Best User Review</a></li>
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
                    <th>Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($songs as $indexKey => $song)
                    <tr>
                        <td>{{$indexKey+1}}.&nbsp;&nbsp;&nbsp;{{$song->title}}</td>
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
                            <form action="{{route('add.review', ['id' => $album->id])}}" method="post">
                                {{csrf_field()}}
                                <input type="text" id="userRating" hidden value="0" name="rating">
                                <div class="userRatingInput" id="rateYo"></div>
                                <br>
                                <textarea style="width: 100%;" placeholder="Write your review here!" class="pb-cmnt-textarea" name="comment"></textarea>
                                <br>
                                <button class="btn btn-primary pull-right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($reviews as $review)
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="{{URL::asset('img/'.$review->user->id.'.jpg')}}" class="img-circle avatar" alt="user profile image" height="250px" width="250px">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <b>{{$review->user->name}}</b>
                        </div>
                        <div class="rating reviewRating {{$review->id}}" id="rateYo" reviewId="{{$review->id}}" ratingValue="{{$review->rating}}"></div>
                    </div>
                </div>
                <div class="post-description">
                    <p>{{$review->comment}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-xs-1"></div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
