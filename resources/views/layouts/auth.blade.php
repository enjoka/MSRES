<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')

</head>
<body>
<div class="flex-center position-ref full-height">

    <div id="wrapper">

        <!-- Navigation -->

    @include('includes.nav_auth')



    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>
                </div>

                <!-- ... Your content goes here ... -->

                @yield('content')

            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>
</body>

</html>
