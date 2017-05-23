@extends('base.base')

@section('title', 'Register')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-4">
            <br><br><br><br><br>
            <img src="{{URL::asset('img/logo-hitam.png')}}" width="255px" height="129px" style="align-content: center;">
        </div>
        <div class="col-xs-6">
            <h3>Register</h3><br>
            <form action="{{route('user.register')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="+628122222000">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="email@inmuse.com">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Re-type Password</label>
                    <input type="password" class="form-control" name="retype-password" placeholder="Retype Password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
        <div class="col-xs-2"></div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection