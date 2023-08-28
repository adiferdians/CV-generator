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

    <!-- JQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <!-- Axios CDN-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Sweetalert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="email" id="email"  value="adiferdian7@gmail.com">
        <input type="password" name="password" placeholder="Password" id="password" value="Adgjmptw12!">
        <div class="check">
            <label id="advanced-checkbox">
                <input type="checkbox" class='input-checkbox' id="remember" />
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
        </div>
        <div>
            <button id="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
            <button id="register" class="btn btn-danger btn-block btn-large secondary">Register</button>
        </div>
</body>
<script>
    $('#submit').on('click', async () => {
        try {
            const email = $('#email').val();
            const password = $('#password').val();
            let login = await axios.post('/login', {
                email,
                password
            })

            if (login.data.success) {
                Swal.fire({
                    text: login.data.message,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1000,
                    customClass: {
                        icon: 'my-custom-icon-class'
                    }
                }).then( async (result) => {
                    window.location.replace('/dashboard')
                    // const token = login.data.data.token;
                    // axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    
                    // let app = await axios.get('/api/dashboard')

                    // $('html').html(app.data)
                })
            } else
                Swal.fire({
                    text: login.data.message,
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 1000,
                    width: '400px',
                })
        } catch (error) {
            Swal.fire({
                text: "Ooops! something wrong",
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000,
                width: '400px',
            })
        }
    });

    $('#register').on('click', function() {
        window.location.href = "register";
    });
</script>

</html>