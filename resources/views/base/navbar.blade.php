<nav class="navbar navbar-static-top" role="navigation">
    <div class="navbar-left col-xs-5">
        <ul class="nav navbar-nav">
            <li><a href="{{route('index')}}"><img src="{{URL::asset('img/logo-putih.png')}}" width="60px" height="38px"></a></li>
            <li><a href="{{route('discover')}}" style="margin-top: 5px;">Discover</a></li>
            <li><a href="{{route('people')}}" style="margin-top: 5px;">People</a></li>
        </ul>
    </div>
    <div class="navbar-right col-xs-7">
        <div class="col-xs-2"></div>
        <div class="col-xs-4" style="margin-top: 5px;">
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                            <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                </div>
            </form>
        </div>
        <div class="col-xs-6" style="margin-top: 5px;">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                @if(!Auth::check())
                    <li>
                        <a href="#" id="myBtn" class="">
                                <i class="glyphicon glyphicon-log-in">&nbsp;Sign In</i>
                            </a>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span class="close">&times;</span>
                                    <h2>Sign in</h2>
                                </div>
                                <form action="{{route('auth.doLogin')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Username or Email Address</label><br>
                                            <input type="text" class="form-control" name="user" placeholder="Username or Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label><br>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="pull-right">
                                            <button class="btn btn-info glyphicon glyphicon-log-in">&nbsp;Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </li>
                    <li class="">
                        <a href="{{route('auth.register')}}" class="">
                            <i class="glyphicon glyphicon-user">&nbsp;Sign Up</i>
                        </a>
                    </li>
                @else
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{--<span>{{$user->name}}&nbsp;<i class="caret"></i></span>--}}
                            <span>NAMA&nbsp;<i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="{{URL::asset('img/'.Auth::user()->id.'.jpg')}}" class="img-circle" alt="User Image" />
                                <p>
                                    {{--{{$user->name}}--}}NAMA
                                    <small>Member since ...</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{route('user.profile', ['username' => Auth::user()->username])}}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{route('auth.doLogout')}}" class="btn btn-default btn-flat">
                                        <i class="glyphicon glyphicon-log-out"></i>&nbsp;Sign out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>