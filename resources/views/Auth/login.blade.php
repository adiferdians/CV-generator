<!DOCTYPE html>
<html lang='en' class=''>

<head>
    <link rel="canonical" href="https://codepen.io/frytyler/pen/EGdtg" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link href="{{ URL::asset('/assets/css/logincss.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <div class="check">
            <label id="advanced-checkbox">
                <input type="checkbox" class='input-checkbox' id="remember"/>
                <span class="slider"></span>
            </label>
            <span class="re-text">&ensp;Remember me</span>
        </div>
        <div class="kpx_login">
            <div class="row kpx_row-sm-offset-3 kpx_socialButtons">
                <div class="col-xs-3">
                    <a href="#" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="fa fa-facebook fa-2x"></i>
                        <span class="hidden-xs"></span>
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="#" class="btn btn-lg btn-block kpx_btn-linkedin" data-toggle="tooltip" data-placement="top" title="linkedin">
                        <i class="fa fa-linkedin fa-2x"></i>
                        <span class="hidden-xs"></span>
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="#" class="btn btn-lg btn-block kpx_btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus">
                        <i class="fa fa-google-plus fa-2x"></i>
                        <span class="hidden-xs"></span>
                    </a>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        </div>
</body>
<script>
    $('#remember').on('change', function(submit) {
        console.log("sapi");
    });
</script>

</html>