@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-3 leftPanel">
            <div>
                <div>
                    <img src="{{URL::asset('img/'.Auth::user()->id.'.jpg')}}" alt="Texto Alternativo" class="fotoprofil foto-circle1">
                    <div class="btn-group">
                        <form action="{{route('user.edit', ['id' => Auth::user()->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="file" name="photo" class="btn btn-file">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-1"></div>
        <div class="col-xs-6 rightPanel">
            <h2>Edit Profile</h2>
            <hr class="colorgraph">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" value="{{$user->username}}" readonly>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Re-type Password</label>
                <input type="password" class="form-control" name="retype-password" placeholder="Retype Password">
            </div>
            <button type="submit" class="btn btn-default">Update</button>
            </form>
            <hr class="colorgraph">
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
