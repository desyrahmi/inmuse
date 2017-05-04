@extends('base.baseadmin')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbaradmin')
@endsection

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Album</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!-- Basic Form Elements -->
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-11">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Artist</label>
                                        <input class="form-control" placeholder="Artist">
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Release Date</label>
                                        <input class="form-control" placeholder="Release Date">
                                    </div>
                                    <div class="form-group">
                                        <label>Overview</label>
                                        <textarea class="form-control" rows="3" placeholder="Overview"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Cover</label>
                                        <input type="file">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                            </div>

                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

@endsection