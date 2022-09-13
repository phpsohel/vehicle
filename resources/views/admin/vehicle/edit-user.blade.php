@extends('admin.layouts')
@section('add-vehicle')
<div class="container">
    <br>
    <br>
    <h2 class="text-center">Edit Vehicle Information</h2>
    <hr>
    <br>
    <div class="row">
        <form action="{{ route('admin.vehicle.user.update', $users->id)}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Full Name:</label>
                    <input type="text" name="full_name"  class="form-control" id="inputEmail4"value="{{ $users->full_name }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Phone:</label>
                    <input type="text" name="phone"  class="form-control" id="inputEmail4"value="{{ $users->phone }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email:</label>
                    <input type="text" name="email"  class="form-control" id="inputEmail4"value="{{ $users->email }}">
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
 @endsection



