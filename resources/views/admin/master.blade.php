<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>Dashboard | Upcube - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesdesign" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{'/backend/assets/images/favicon.ico'}}">

    <!-- jquery.vectormap css -->
    <link href="{{'/backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css'}}" rel="stylesheet"
          type="text/css"/>

    <!-- DataTables -->
    <link href="{{'/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css'}}" rel="stylesheet"
          type="text/css"/>

    <!-- Responsive datatable examples -->
    <link href="{{'/backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css'}}"
          rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="{{'/backend/assets/css/bootstrap.min.css'}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{'/backend/assets/css/icons.min.css'}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{'/backend/assets/css/app.min.css'}}" id="app-style" rel="stylesheet" type="text/css"/>

</head>

<body data-topbar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    <!-- header of the page -->
    @include('admin.body.header')
    <!-- /header of the page -->

    <!-- Sidebar -->
    @include('admin.body.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @yield('content')
        <!-- End Page-content -->

        <!-- footer area -->
        @include('admin.body.footer')
        <!-- / footer area -->
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{'/backend/assets/libs/jquery/jquery.min.js'}}"></script>
<script src="{{'/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
<script src="{{'/backend/assets/libs/metismenu/metisMenu.min.js'}}"></script>
<script src="{{'/backend/'}}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{'/backend/'}}assets/libs/node-waves/waves.min.js"></script>


<!-- apexcharts -->
<script src="{{'/backend/'}}assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- jquery.vectormap map -->
<script src="{{'/backend/'}}assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{'/backend/'}}assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

<!-- Required datatable js -->
<script src="{{'/backend/'}}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{'/backend/'}}assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="{{'/backend/'}}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{'/backend/'}}assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="{{'/backend/'}}assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="{{'/backend/'}}assets/js/app.js"></script>
</body>

</html>
