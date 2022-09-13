<br>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('admin.index')}}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                </li>
                {{-- <li class="has_sub">
                    <a href="" class="waves-effect"><i class="md md-view-list"></i><span> Vehicle Management</span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                    </ul>
                </li> --}}
                <li>
                    <a href="{{ route ('admin.vehicle.add-vehicle')}}" class="waves-effect active" ><i class="fa fa-plus"></i>Add Vehicle</a>
                </li>
                <li>
                    <a href="{{ route ('admin.vehicle.all-report')}}" class="waves-effect active"><i class="fa fa-server"></i>All Vehicle List</a>
                </li>
                <li>
                    <a href="{{ route ('admin.vehicle.report')}}"class="waves-effect active"><i class="fa fa-globe"></i>Report</a>
                </li>
                <li>
                    <a href="{{ route('admin.vehicle.user')}}"class="waves-effect active"><i class="fa fa-user"></i>User</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
