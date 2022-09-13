@extends('admin.layouts')
@section('add-vehicle')
<div class="container">
    <br>
    <br>
    <h2 class="text-center"> Vehicle Details Information</h2>
    <hr>
    <br>
    <div class="row">
        @foreach ($all_reports as $all_report )
        <div class="col-md-4" style="margin-left:-40px;">
            <?php
            $qrcode_msg= $all_report->v_reg_no."%0A";
            $qrcode_msg.=$all_report->v_route_name_start." - ".$all_report->v_route_name_end."%0A";
            $qrcode_msg.=$all_report->v_route_permit_expire_date."%0A";
            $qrcode_msg.="http://223.27.94.123/vehicle/vehicle-details/checker.php?code=".$all_report->v_idetify_code;
            ?>
            <center><img src="http://223.27.94.123/vehicle/vehicle-details/generate.php?code=<?php echo $qrcode_msg;?>" alt=""></center>
        </div>
        @endforeach
        <div class="col-md-8">
            <div class="row">
            @foreach ($all_reports as $all_report )
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Sl No: </label> <span>{{ $all_report->v_serial_no }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Reg No: </label> <span>{{ $all_report->v_reg_no }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Chasis No:</label> <span>{{ $all_report->v_chasis_no }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Engine No:</label> <span>{{ $all_report->v_engine_no }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Route No:</label> <span>{{ $all_report->v_route_no }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Route Name Start:</label> <span>{{ $all_report->v_route_name_start }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Route Name End:</label> <span>{{ $all_report->v_route_name_end }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Fitness Expiry date:</label> <span>{{ $all_report->v_fitness_expiry_date }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tax Token Expiry date:</label> <span>{{ $all_report->v_tax_expiry_date }}</span>
                        </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Route Permit Ex:  Date:</label> <span>{{ $all_report->v_route_permit_expire_date }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Status :</label> <span>{{ $all_report->v_status }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Owner Name:</label> <span>{{ $all_report->v_owner_name }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Owner Address:</label> <span>{{ $all_report->v_owner_address }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Owner Phone:</label> <span>{{ $all_report->owner_phone_no }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Sticker Expire date:</label> <span>{{ $all_report->sticker_expire_date }}</span>
                        </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Identify Code:</label> <span>{{ $all_report->v_idetify_code }}</span>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
 @endsection




