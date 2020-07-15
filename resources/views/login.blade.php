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

        <!-- Custom CSS for this webpage -->
        <link href="{{ url('assets/css/main-layout.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/login.css') }}" rel="stylesheet">

    </head>

    <body>
        <div class="container-fluid layout-main">
            <div class="login-heading">
                <h1>FLEXIPLE THEME DESIGNER</h1>
                <span>If you need a FORM, this is where you get it FROM.</span>
            </div>
            <div class="login-form">
                <p>Please login to continue!</p>
                <form method="POST" action="/login" id="user-login-form" class="user-login-form">
                    @csrf
                    <div class="form-group">
                        <label for="user-id">User ID &nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" id="user-id" name="user-id" placeholder="Please provide USER ID.">
                        <small id="user-id-error" class="error-msg hidden">Invalid User ID.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Please provide PASSWORD.">
                        <small id="user-id-error" class="error-msg hidden">Invalid Password.</small>
                    </div>
                    <div class="submit-button text-center">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
            <div class="error-display hide">
                @if(\Session::has('error'))
                <input type="hidden" id="error-text" value="{!! \Session::get('error') !!}">
                @else
                <input type="hidden" id="error-text" value="">
                @endif
                <span id="error-message"></span>
                <span id=error-time> This message will close in 3 seconds! </span>
            </div>
        </div>

        <!-- JQuery Min Javascript -->
        <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap Bundle Min JavaScript -->
        <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Plugin JavaScript -->
        <script src="{{ url('assets/plugins/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom CSS for this webpage -->
        <script src="{{ url('assets/js/login.js') }}"></script>
        
    </body>
</html>