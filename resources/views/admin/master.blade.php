<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        @yield('title')
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        </head>
        @include('admin.components.css')
    <body>

        <!-- Navigation Bar-->
        @include('admin.components.navbar')
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
            @yield('title-box')
            <!-- page-title-box -->

            <div class="page-content-wrapper">
                @yield('content')
                <!-- end container-fluid -->
            </div>
            <!-- end page content-->

        </div>
        <!-- page wrapper end -->

        <!-- Footer -->
        <footer class="footer">
            @include('admin.components.footer')
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="../plugins/peity/jquery.peity.min.js"></script>

        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>

        <script src="assets/pages/dashboard.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>