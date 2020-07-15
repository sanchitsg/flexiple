<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Flexiple Theme Designer - One stop solution to design basic FORM layouts.">
        <meta name="author" content="SANCHIT SINGH <sanchit.sg.official@gmail.com>">

        <title>Flexiple Theme Designer - One stop solution to design basic FORM layouts. </title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom CSS for Icomoon. -->
        <link href="{{ url('assets/fonts/icomoon/style.css') }}" rel="stylesheet">

        <!-- Custom CSS for this webpage -->
        <link href="{{ url('assets/css/main-layout.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/home.css') }}" rel="stylesheet">

    </head>

    <body>
        <div class="container-fluid layout-main">
            <div class="header">
            @include('components.header')
            </div>
            <div class="content">
            @include('components.pages')
            </div>
            <div class="footer">
            @include('components.footer')
            </div>
        </div>

        @include('components.modals')

        <!-- JQuery Min Javascript -->
        <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap Bundle Min JavaScript -->
        <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Plugin JavaScript -->
        <script src="{{ url('assets/plugins/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom CSS for this webpage -->
        <script src="{{ url('assets/js/home.js') }}"></script>
    </body>
</html>