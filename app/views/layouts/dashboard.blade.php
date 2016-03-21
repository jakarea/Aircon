<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GM Enterprice | Administration</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <script type="text/javascript"> var App = {}; App.baseUrl = "{{url()}}";</script>
        {{HTML::style('assets/build/build.css')}}
         {{HTML::style('assets/css/custom.css')}}
        {{HTML::script('assets/build/build.js')}}

        <style>
               
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{url()}}" style="background: rgb(240, 219, 219)" class="logo">
                <img src="{{asset('assets/img/logo.png')}}" alt="gm logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <!-- AdminLTE -->
            </a>
            @include("inc.navbar")
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            @include("inc.sidebar")

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side stretch">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @section('page-title')
                        <h1> Dashboard <small>Control panel</small> </h1>
                    @show

                    <ol class="breadcrumb">
                        @section('breadcrumb')
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                        @show
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
                    
                        @yield('main')
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        
        
        <script type="text/javascript">
            Waves.displayEffect();
        </script>
        @yield('footer')
    </body>
</html>