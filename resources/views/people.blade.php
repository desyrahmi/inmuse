@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3>People's Review</h3>
            <hr>
            @foreach($reviews as $review)
                <div class="col-xs-4">
                    <div class="panel panel-white post panel-shadow" style="margin-bottom: 15px">
                        <div class="post-heading">
                            <div class="pull-left image">
                                <img src="{{URL::asset('img/'.$review->user->id.'.jpg')}}" class="img-circle avatar" alt="user profile image">
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <b>{{$review->user->name}}</b>
                                </div>
                                <div class="rating reviewRating {{$review->id}}" id="rateYo" reviewId="{{$review->id}}" ratingValue="{{$review->rating}}"></div>
                            </div>
                        </div>
                        <div class="post-description">
                            <p>{{str_limit($review->comment, 45)}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
