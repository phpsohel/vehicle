<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">All Vehicle List</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <a href="{{ route('students') }}" class="btn btn-primary" style="text-align: left;">Print</a>
                            <a href="{{ route ('pdf')}} " class="btn btn-primary" style="text-align: left;">Export PDF</a>
                        </div>
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
                                        <th>Sticker Printed Date</th>
                                        <th>Sticker Status</th>
                                        <th>Last Sticker Expire date</th>
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
                                                <p style='padding: 5px; background-color: green;text-align: center;color: white;'>Active</p>
                                            @elseif($all_report->v_status == 0)
                                                <p style='padding: 5px; background-color: #761919;text-align: center;color: white;'>Inactive</p>
                                            @endif
                                        <td>{{$all_report->v_owner_name}}</td>
                                        <td>{{$all_report->v_owner_address}}</td>
                                        <td>{{$all_report->owner_phone_no}}</td>
                                        <td>{{$all_report->sticker_printed_date}}</td>
                                        <td>
                                            @if($all_report->sticker_status == 1)
                                            <p style='padding: 5px; background-color: green;text-align: center;color: white;'>Printed</p>
                                        @elseif($all_report->sticker_status == 0)
                                            <p style='padding: 5px; background-color: #761919;text-align: center;color: white;'>No print</p>
                                        @endif
                                        </td>
                                        <td>{{$all_report->sticker_expire_date}}</td>
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
    </div>
</body>
</html>
