@include('admin.header')
@include('admin.sidebar')
<!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                @yield('dashboard')
                @yield('add-vehicle')
                @yield('all-Report')
            </div>
        </div>
            </div>
        </div>
@include('admin.footer')
