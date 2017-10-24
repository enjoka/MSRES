<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MSRes</title>
    <!-- Bootstrap Core CSS -->
{!! Html::style("css/bootstrap.min.css" ) !!}

<!-- MetisMenu CSS -->
{!! Html::style("css/metisMenu.min.css" ) !!}

<!-- Timeline CSS -->
{!! Html::style("css/timeline.css" ) !!}

<!-- Custom CSS -->
{!! Html::style("css/startmin.css" ) !!}

<!-- Morris Charts CSS -->
{!! Html::style("css/morris.css" ) !!}

<!-- Custom Fonts -->
    {!! Html::style("css/font-awesome.min.css" ) !!}


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fonts -->
    {!! Html::style("https://fonts.googleapis.com/css?family=Raleway:100,600" ) !!}


</head>
<body>
<div class="flex-center position-ref full-height">

    <div id="wrapper">

        <!-- Navigation -->

    @include('includes.nav_stud')



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
