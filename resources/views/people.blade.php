@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h4>People</h4>
            <hr>
            <div class="col-xs-4">
                <div class="panel panel-white post panel-shadow" style="margin-bottom: 15px">
                    <div class="post-heading">
                        <div class="pull-left image">
                            <img src="/cobainmuse/public/img/u238.jpg" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                            <div class="title h5">
                                <b>Ryan Haywood</b>
                                made a post.
                            </div>
                            <h6 class="text-muted time">1 minute ago</h6>
                        </div>
                    </div>
                    <div class="post-description">
                        <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
