@extends('admin.layouts')
@section('title', 'Dashboard')
@section('dashboard')

<!-- Start Widget -->
<div class="row">
    <div class="col-md-6 col-sm-6 col-lg-4">
        <div class="mini-stat clearfix bx-shadow">
            <span class="mini-stat-icon bg-info"><i class="fa fa-bus"></i></span>
            <div class="mini-stat-info text-right text-muted">
                <span class="counter">{{ $count }}</span>
                All Vehicles
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    {{-- <h5 class="text-uppercase">Vehicle <span class="pull-right">60%</span></h5> --}}
                    {{-- <div class="progress progress-sm m-0">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-4">
        <div class="mini-stat clearfix bx-shadow">
            <span class="mini-stat-icon bg-purple"><i class="icon ion-checkmark"></i></span>
            <div class="mini-stat-info text-right text-muted">
                <span class="counter">{{ $active }}</span>
                All Active Vehicles            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    {{-- <h5 class="text-uppercase">Vehicle <span class="pull-right">60%</span></h5> --}}
                    {{-- <div class="progress progress-sm m-0">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-4">
        <div class="mini-stat clearfix bx-shadow">
            <span class="mini-stat-icon bg-success"><i class="icon ion-close"></i></span>
            <div class="mini-stat-info text-right text-muted">
                <span class="counter">{{$Last_expiry_date}}</span>
                Last Sticker Expire Date
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    {{-- <h5 class="text-uppercase">Vehicle <span class="pull-right">60%</span></h5> --}}
                    {{-- <div class="progress progress-sm m-0">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


