@extends('base.baseadmin')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbaradmin')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            List User
            <small>Control panel</small>
        </h1>
        <br>
        <div class="container">
            <div class="panel-body" style="width: 95%;">
                <table width="100%" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Email</th>
                        <th colspan="2" class="text-center">Menu</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $indexKey => $user)
                        <tr>
                            <td class="text-center">{{$indexKey+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-center"><a href="{{route('user.edit.show', ['id'=> $user->id])}}">Edit</a></td>
                            <td class="text-center">Delete</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{ $users->render() }}
            </div>
        </div>
    </section>
@endsection