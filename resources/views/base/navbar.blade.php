<div class="navbar-wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- Responsive navbar -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
            {{--<h1 class="brand"><a href="#">InMuSe</a></h1>--}}
            <!-- navigation -->
                <nav class="pull-left nav-collapse collapse">
                    <ul id="menu-main" class="nav">
                        <li><a href="{{route('index')}}"><img src="{{URL::asset('img/logo-putih.png')}}" width="75px" height="53px"></a></li>
                        <li><a href="{{route('discover')}}">Discover</a></li>
                        <li><a href="{{route('people')}}">People</a></li>
                    </ul>
                </nav>
                <!-- <div class="col-sm-3 col-md-3"> -->

                <!-- </div> -->
                <nav class="pull-right nav-collapse collapse">
                    <ul id="menu-main" class="nav">
                        <li>
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input style="margin-top: 7px; border-radius: 0px" type="text" class="form-control" placeholder="Search" name="search">
                                </div>
                            </form>
                        </li>
                        <li><button style="margin-top: 5px; padding: 3px" class="btn btn-default" type="submit"><i class="icon-search"></i></button></li>
                    @if(!Auth::check())
                            <li><a class="icon-signin" href="#0" data-toggle="modal" data-target="#loginModal"> Login</a></li>
                            <li><a class="icon-user" href="{{route('auth.register')}}"> Register</a></li>
                        @else
                            <li><a href="{{route('user.profile', ['username' => Auth::user()->username])}}"> Profil</a></li>
                            <li><a class="icon-signout" href="{{route('auth.doLogout')}}"> Logout</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- =========================== 
      MODAL BARU 
================================ -->

<!-- line modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Login</h3>
                <img src="{{URL::asset('img/logo-hitam.png')}}" width="255px" height="129px">
            </div>
            <div class="modal-body">

                <!-- content goes here -->
                <form method="post" action="{{route('auth.doLogin')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username or Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="user" placeholder="Username or Email Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Login</button>
                    </div>
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