<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistema de Asistencia de Docentes - FORTALECIMIENTO</title>

        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->

        @include('includes.css')
    </head>
    <body class="menubar-hoverable header-fixed menubar-pin ">

        @include('includes.header')

        <!-- BEGIN BASE-->
        <div id="base">

            <!-- BEGIN CONTENT-->
            <div id="content">

                @section('content')

                @endsection
            </div><!--end #content-->
            <!-- END CONTENT -->

            @include('includes.menu') 

        </div><!--end #base-->
        <!-- END BASE -->

        <!-- BEGIN JAVASCRIPT -->
        @include('includes.js')
        <!-- END JAVASCRIPT -->

    </body>
</html>
