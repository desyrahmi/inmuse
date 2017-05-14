@extends('base.baseadmin')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbaradmin')
@endsection

@section('content')
    <div class="col-xs-8">
        <form action="" role="form">
            <div class="form-group">
                <label>Artist</label>
                <input type="text" class="form-control" name="artist" placeholder="Artist">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Release Date</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-group">
                <label>Overview</label>
                <textarea name="review" class="form-control" cols="30" rows="3" placeholder="Overview"></textarea>
            </div>
            <div class="form-group">
                <label>Cover</label>
                <input type="file" name="photo">
            </div>
            <button type="submit" class="btn btn-default">Add Album</button>
            <button type="reset" class="btn btn-default" style="margin-left: 10px">Cancel</button>
        </form>
    </div>
@endsection

@endsection