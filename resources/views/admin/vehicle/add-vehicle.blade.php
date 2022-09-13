@extends('admin.layouts')
@section('title', 'Add Data')
@section('add-vehicle')
<div class="container">
    <br>
    <br>
    <h2 class="text-center">Added Vehicle Information </h2>
    <hr>
    <br>
    <div class="row">
        <form action="{{ route ('admin.vehicle.store')}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Sl No:</label>
                    <input type="integer" name="v_serial_no" class="form-control" id="inputEmail4" required placeholder="Sl No"  >
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Reg No:</label>
                    <input type="integer" name="v_reg_no" class="form-control" id="inputPassword4"  required placeholder="Registration No">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Chasis No:</label>
                    <input type="integer" name="v_chasis_no" class="form-control" id="inputPassword4" required  placeholder="Chasis No">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Engine No:</label>
                    <input type="integer" name="v_engine_no" class="form-control" id="inputPassword4" required  placeholder="Engine No">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Route No:</label>
                    <input type="integer" name="v_route_no" class="form-control" id="inputPassword4" required placeholder="Route No">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Route Name Start:</label>
                    <input type="text" name="v_route_name_start" class="form-control" id="inputPassword4" required placeholder="Route Name Start">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Route Name End:</label>
                    <input type="text" name="v_route_name_end" class="form-control" id="inputPassword4" required  placeholder="Route No">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Fitness Expiry date:</label>
                    <input type="date" name="v_fitness_expiry_date" class="form-control" required id="inputPassword4" >
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Tax Expiry date:</label>
                    <input type="date" name="v_tax_expiry_date" class="form-control" required id="inputPassword4" >
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Route Permit Ex:  Date:</label>
                    <input type="date" name="v_route_permit_expire_date" class="form-control" required id="inputPassword4" >
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Owner Name:</label>
                    <input type="tex" name="v_owner_name" class="form-control" id="inputPassword4" required placeholder="Mohammed">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Owner Address:</label>
                    <input type="tex" name="v_owner_address" class="form-control" id="inputPassword4"  required placeholder="Dhaka-1216">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Owner Phone:</label>
                    <input type="integer" name="owner_phone_no" class="form-control" id="inputPassword4" required placeholder="01....">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Sticker Printed date:</label>
                    <input type="date" name="sticker_printed_date" class="form-control" id="inputPassword4" required >
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Last Sticker Expire date:</label>
                    <input type="date" name="sticker_expire_date" class="form-control" id="inputPassword4" required >
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
 @endsection



