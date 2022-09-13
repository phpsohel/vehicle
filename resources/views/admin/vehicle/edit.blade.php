@extends('admin.layouts')
@section('add-vehicle')
<div class="container">
    <br>
    <br>
    <h2 class="text-center">Edit Vehicle Information</h2>
    <hr>
    <br>
    <div class="row">
        <form action="{{ route('admin.vehicle.update',$edit->id)}}" method="POST">
            @csrf
            {{-- @method('put') --}}
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Sl No:</label>
                    <input type="integer" name="v_serial_no"  class="form-control" id="inputEmail4" placeholder="Sl No"  value="{{ $edit->v_serial_no }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Reg No:</label>
                    <input type="integer" name="v_reg_no" class="form-control" id="inputPassword4" placeholder="Registration No" value="{{ $edit->v_reg_no }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Chasis No:</label>
                    <input type="integer" name="v_chasis_no" class="form-control" id="inputPassword4" placeholder="Chasis No" value="{{ $edit->v_chasis_no }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Engine No:</label>
                    <input type="integer" name="v_engine_no" class="form-control" id="inputPassword4" placeholder="Engine No" value="{{ $edit->v_chasis_no }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Route No:</label>
                    <input type="integer" name="v_route_no" class="form-control" id="inputPassword4" placeholder="Route No" value="{{ $edit->v_route_no }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Route Name Start:</label>
                    <input type="text" name="v_route_name_start" class="form-control" id="inputPassword4" placeholder="Route Name Start" value="{{ $edit->v_route_name_start }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Route Name End:</label>
                    <input type="text" name="v_route_name_end" class="form-control" id="inputPassword4" placeholder="Route No" value="{{ $edit->v_route_name_end }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Fitness Expiry date:</label>
                    <input type="date" name="v_fitness_expiry_date" class="form-control" id="inputPassword4" value="{{ $edit->v_fitness_expiry_date }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Tax Expiry date:</label>
                    <input type="date" name="v_tax_expiry_date" class="form-control" id="inputPassword4" value="{{ $edit->v_tax_expiry_date }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Route Permit Ex:  Date:</label>
                    <input type="date" name="v_route_permit_expire_date" class="form-control" id="inputPassword4" value="{{ $edit->v_route_permit_expire_date }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Owner Name:</label>
                    <input type="tex" name="v_owner_name" class="form-control" id="inputPassword4" placeholder="Mohammed" value="{{ $edit->v_owner_name }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Owner Address:</label>
                    <input type="tex" name="v_owner_address" class="form-control" id="inputPassword4" placeholder="Dhaka-1216" value="{{ $edit->v_owner_address }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Owner Phone:</label>
                    <input type="integer" name="owner_phone_no" class="form-control" id="inputPassword4" placeholder="01...." value="{{ $edit->owner_phone_no }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Sticker Printed date:</label>
                    <input type="date" name="sticker_printed_date" class="form-control" id="inputPassword4" placeholder="01...." value="{{ $edit->sticker_expire_date }}">
                </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Last Sticker Expire date:</label>
                    <input type="date" name="sticker_expire_date" class="form-control" id="inputPassword4" placeholder="01...." value="{{ $edit->sticker_expire_date }}">
                </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
 @endsection



