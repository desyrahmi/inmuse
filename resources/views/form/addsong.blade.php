@extends('base.baseadmin')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbaradmin')
@endsection

@section('content')
    <div class="col-xs-8">
        <form action="{{route('add.song')}}" role="form" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Duration</label>
                <input type="text" class="form-control" name="duration" placeholder="Duration">
            </div>
            <div class="form-group">
                <label>Album Name</label>
                <select name="album_id">
                    @foreach($albums as $album)
                    <option value="{{$album->id}}">{{$album->title}}</option>
                        @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-default">Add Song</button>
            <button type="reset" class="btn btn-default" style="margin-left: 10px">Cancel</button>
        </form>
    </div>
@endsection
