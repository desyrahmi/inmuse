@extends('base.baseadmin')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbaradmin')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            List Album
            <small>Control panel</small>
        </h1>
        <br>
        <div class="container">
            <div class="panel-body" style="width: 95%;">
                <table width="100%" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Artist</th>
                        <th class="text-center">Rating</th>
                        <th colspan="2" class="text-center">Menu</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Sinestesia</td>
                        <td>Efek Rumah Kaca</td>
                        <td>4.5</td>
                        <td class="text-center">Edit</td>
                        <td class="text-center">Delete</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Sinestesia</td>
                        <td>Efek Rumah Kaca</td>
                        <td>4.5</td>
                        <td class="text-center">Edit</td>
                        <td class="text-center">Delete</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection