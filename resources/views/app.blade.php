<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Xadmino - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href={{ asset("images/favicon.ico") }}>

        <!-- DataTables -->
        <link href={{ asset("plugins/datatables/jquery.dataTables.min.css") }} rel="stylesheet" type="text/css" />
        <link href={{ asset("plugins/datatables/responsive.bootstrap.min.css") }} rel="stylesheet" type="text/css" />
        <link href={{ asset("plugins/datatables/dataTables.bootstrap.min.css") }} rel="stylesheet" type="text/css"/>


        <link href={{ asset("css/bootstrap.min.css") }} rel="stylesheet" type="text/css">
        <link href={{ asset("css/icons.css") }} rel="stylesheet" type="text/css">
        <link href={{ asset("css/style.css") }} rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

           @include('template.header')

           @include('template.sidebar')


            

           <div class="content-page">
            
            @yield('content') {{-- //konten --}}
            @include('template.footer')
           </div>

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src={{ asset("js/jquery.min.js") }}></script>
        <script src={{ asset("js/bootstrap.min.js") }}></script>
        <script src={{ asset("js/modernizr.min.js") }}></script>
        <script src={{ asset("js/detect.js") }}></script>
        <script src={{ asset("js/fastclick.js") }}></script>
        <script src={{ asset("js/jquery.slimscroll.js") }}></script>
        <script src={{ asset("js/jquery.blockUI.js") }}></script>
        <script src={{ asset("js/waves.js") }}></script>
        <script src={{ asset("js/wow.min.js") }}></script>
        <script src={{ asset("js/jquery.nicescroll.js") }}></script>
        <script src={{ asset("js/jquery.scrollTo.min.js") }}></script>

        <script src={{ asset("plugins/jquery-sparkline/jquery.sparkline.min.js") }}></script>

        <!-- Datatables-->
        <script src={{ asset("plugins/datatables/jquery.dataTables.min.js") }}></script>
        <script src={{ asset("plugins/datatables/dataTables.bootstrap.js") }}></script>
        <script src={{ asset("plugins/datatables/dataTables.responsive.min.js") }}></script>
        <script src={{ asset("plugins/datatables/responsive.bootstrap.min.js") }}></script>

        <script src={{ asset("pages/dashborad.js") }}></script>

        <script src={{ asset("js/app.js") }}></script>
        
        @yield('script')
    </body>
</html>