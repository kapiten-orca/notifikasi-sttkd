<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>STTKD Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href={{asset("templates/vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{asset('templates/css/sb-admin-2.min.css')}} rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
       @include('partial.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="   ">
                @include('partial.navbar')
                @include('partial.header')
                @yield('konten')
            </div>
            <!-- Footer -->
            @include('partial.footer')
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- Scroll to Top Button-->
    @include('partial.scroll')
    <!-- Logout Modal-->
    @include('partial.logout')
    <!-- Bootstrap core JavaScript-->
    <script src={{asset('templates/vendor/jquery/jquery.min.js')}}></script>
    <script src={{asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{asset('templates/vendor/jquery-easing/jquery.easing.min.js')}}></script>
    <script src={{asset('sw.js')}}></script>
    <!-- Custom scripts for all pages-->
    <script src={{asset('templates/js/sb-admin-2.min.js')}}></script>
    <script src={{asset('templates/vendor/chart/chart.umd.js')}}></script>

</body>

</html>