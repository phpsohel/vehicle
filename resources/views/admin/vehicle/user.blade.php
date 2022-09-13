@extends('admin.layouts')
@section('title', 'User')
@section('dashboard')
<!-- Start Widget -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">All User </h3>
                <a href="{{ route('register')}}" class="btn btn-primary">Add User</a>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable"  id="datatable2" class="table table-striped table-bordered ngh">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>User Name</th>
                                    <th>Full Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Admin Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->full_name}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->user_type == 1)
                                        <p style='padding: 5px; background-color: green;text-align: center;color: white;'>Super Admin</p>
                                    @elseif($user->user_type == 2)
                                        <p style='padding: 5px; background-color: #761919;text-align: center;color: white;'>Admin</p>
                                    @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.vehicle.user.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.vehicle.user.delete', $user->id)}}" class="btn btn-danger">Delete</a>
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
@endsection


