
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
            //$('#datatable').dataTable();
            $('#datatable').dataTable( {
                "scrollX": true
            } );
        } );
    </script>
	</body>
</html>
