@extends('base.base')

@section('title', 'Comment')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="span3"></div>
            <div class="span6">
                <br>
                <br>
                <h3>Review</h3>
                <img src="{{URL::asset('img/logo-hitam.png')}}" width="255px" height="129px">
                <form action="{{route('user.register')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Rizky Fenaldo">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="aldonesia">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="lala@lala.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Register</button>
                </form>
            </div>
            <div class="span3"></div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection