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
                        <th class="text-center">Rating</th>
                        <th class="text-center">Menu</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($albums as $album)
                        <tr>
                            <td>{{$album->title}}</td>
                            <td>{{$album->artist}}</td>
                            <td>4.5</td>
                            <td class="text-center"><a href="{{route('delete.album', ['id' => $album->id])}}" class="btn">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $albums->render() !!}
            </div>
        </div>
    </section>
@endsection