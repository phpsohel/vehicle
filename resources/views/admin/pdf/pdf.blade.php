<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Pdf</title>
        <!-- Base Css Files -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('css/animate.css')}}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('css/waves-effect.css')}}" rel="stylesheet">

        <!-- DataTables -->
        <link href="{{ asset('assets/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Custom Files -->
        <link href="{{ asset('css/helper.css')}}" rel="stylesheet'" type="text/css" />
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('js/modernizr.min.js')}}"></script>

    </head>
    <body class="">
        <!-- Begin page -->
        <div id="">
           <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="container">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default"><div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl No</th>
                                                            <th>Reg No</th>
                                                            <th>Chasis No</th>
                                                            <th>Engine No</th>
                                                            <th>Route No</th>
                                                            <th>Route Name Start</th>
                                                            <th>Route Name End</th>
                                                            <th>Fitness Expiry Date</th>
                                                            <th>Tax Expiry Date</th>
                                                            <th>Route Permit Expire Date	</th>
                                                            <th>Status</th>
                                                            <th>Owner Name</th>
                                                            <th>Owner Address</th>
                                                            <th>Owner Phone No</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($all_reports as $all_report )
                                                        <tr>
                                                            <td>{{$all_report->v_serial_no}}</td>
                                                            <td>{{$all_report->v_reg_no}}</td>
                                                            <td>{{$all_report->v_chasis_no}}</td>
                                                            <td>{{$all_report->v_engine_no}}</td>
                                                            <td>{{$all_report->v_route_no}}</td>
                                                            <td>{{$all_report->v_route_name_start}}</td>
                                                            <td>{{$all_report->v_route_name_end}}</td>
                                                            <td>{{$all_report->v_fitness_expiry_date}}</td>
                                                            <td>{{$all_report->v_tax_expiry_date}}</td>
                                                            <td>{{$all_report->v_route_permit_expire_date}}</td>
                                                            <td>
                                                                @if($all_report->v_status == 1)
                                                                <a href=""class="btn btn-success" >Active</a>
                                                                @elseif($all_report->v_status == 0)
                                                                <a href=""class="btn btn-danger" >Deactive</a>
                                                                @endif
                                                            <td>{{$all_report->v_owner_name}}</td>
                                                            <td>{{$all_report->v_owner_address}}</td>
                                                            <td>{{$all_report->owner_phone_no}}</td>
                                                            <td>
                                                                <a href="{{ route('admin.vehicle.edit',$all_report->id )}}" class="btn btn-primary">Edit</a>
                                                                <a href="{{ route('admin.vehicle.delete',$all_report->id )}}" class="btn btn-danger">Delete</a>
                                                                <a href="{{ route('admin.vehicle.view',$all_report->id )}}" class="btn btn-success">View</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/waves.js')}}"></script>
        <script src="{{ asset('js/jquery.printPage.js')}}"></script>
        <script src="{{ asset('js/wow.min.js')}}"></script>
        <script src="{{ asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{ asset('assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{ asset('assets/fastclick/fastclick.js')}}"></script>
        <script src="{{ asset('assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets/jquery-blockui/jquery.blockUI.js')}}"></script>


        <!-- CUSTOM JS -->
        <script src="{{ asset('js/jquery.app.js')}}"></script>

        <script src="{{ asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/datatables/dataTables.bootstrap.js')}}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

	</body>
</html>
