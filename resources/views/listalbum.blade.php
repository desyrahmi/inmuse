@extends('base.baseadmin')

@section('title', 'InMuSe')

@section('navbar')
    @include('base.navbaradmin')
@endsection

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Album</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        List Album
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Artist</th>
                                <th>Release Date</th>
                                <th>Rating</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Misc</td>
                            </tr>
                            <tr>
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Misc</td>
                            </tr>
                            <tr>
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Misc</td>
                            </tr>
                            <tr>
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Misc</td>
                            </tr>
                            <tr>
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Misc</td>
                            </tr>
                            <tr>
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Embedded devices</td>
                                <td>Misc</td>
                            </tr>




                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
    <!--  <script>
     $(document).ready(function() {
         $('#dataTables-example').DataTable({
             responsive: true
         });
     });
     </script> -->
@endsection