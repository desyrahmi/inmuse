@extends('base.baseadmin')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbaradmin')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            List Album
            <small>Control panel</small>
        </h1>
        <br>
        <div class="container">
            <div class="panel-body" style="width: 95%;">
                <table width="100%" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">Title</th>
                        <th class="text-center">Artist</th>
                        <th class="text-center">Album</th>
                        <th class="text-center">Menu</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($songs as $song)
                        <tr>
                            <td>{{$song->title}}</td>
                            <td>{{$song->album->artist}}</td>
                            <td>{{$song->album->title}}</td>
                            <td class="text-center"><a href="{{route('delete.song', ['id' => $song->id])}}" class="btn">Delete</a></td>
                        </tr>
{{--                        {!! $song->render() !!}--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection