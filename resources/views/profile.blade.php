@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row" id="main">
                <div class="span4" id="leftPanel">
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
                <div class="span8" id="rightPanel">
                    <div>
                        <div>
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
                </div>
            </div>



            <!-- ===========================
                  MODAL BARU
            ================================ -->

            <!-- line modal -->
            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h3 class="modal-title" id="lineModalLabel">Edit Profile</h3>
                        </div>
                        <div class="modal-body">

                            <!-- content goes here -->
                            <form action="{{route('user.edit', ['id' => $user->id])}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" name="name" value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUName">Username</label>
                                    <input type="text" class="form-control" id="exampleInputUName" name="username" value="{{$user->username}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhone">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputPhone" name="phone" value="{{$user->phone}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload Foto</label>
                                    <input type="file" id="exampleInputFile" name="photo">
                                </div>
                                <button type="submit" class="btn btn-default">Update</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @include('base.footer')
@endsection