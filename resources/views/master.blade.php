<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reservasi Hotel Al-Hasan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/datatables/css/select.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
</head>

<body>
    <!-- main wrapper -->
    <div class="dashboard-main-wrapper">
       <!-- navbar -->
        @include('inc.navbar')
        <!-- end navbar -->
        <!-- left sidebar -->
        @include('inc.sidebar')
        <!-- end left sidebar -->
        
        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                @yield('content')
            </div>
            <!-- footer -->
            <div class="footer" style="position: fixed; bottom: 0;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2021 Hotel Al-Hasan.
                        </div>
                    </div>
                </div>
            </div>
            <!-- end footer -->
        </div>
        <!-- end wrapper  -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('/assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{ asset('/assets/libs/js/main-js.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/assets/vendor/datatables/js/data-table.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
</body>
 
</html>