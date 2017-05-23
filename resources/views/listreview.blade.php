@extends('base.baseadmin')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbaradmin')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            List Review
            <small>Control panel</small>
        </h1>
        <br>
        <div class="container">
            <div class="panel-body" style="width: 95%;">
                <table width="100%" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Album</th>
                        <th class="text-center">User</th>
                        <th class="text-center">Rating</th>
                        <th class="text-center">Comment</th>
                        <th class="text-center">Menu</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $indexKey => $review)
                        <tr>
                            <td>{{$indexKey+1}}</td>
                            <td>{{$review->album->title}}</td>
                            <td>{{$review->user->name}}</td>
                            <td>{{$review->rating}}</td>
                            <td>{{$review->comment}}</td>
                            <td class="text-center"><a href="{{route('delete.review', ['id' => $review->id])}}" class="btn">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {!! $reviews->render() !!}
            </div>
        </div>
    </section>
@endsection