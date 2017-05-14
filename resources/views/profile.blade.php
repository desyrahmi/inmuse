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
                        <button type="button" class="btn btn-inverse" data-toggle="modal" data-target="#squarespaceModal">
                            Edit Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-1"></div>
        <div class="col-xs-6 rightPanel">
            <h2>Helo, {{$user->name}}!<small> All about music is here!</small></h2>
            <hr class="colorgraph">
            <div >
                <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{$user->username}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{$user->phone}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr class="colorgraph">
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
