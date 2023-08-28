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
        <h1>Register</h1>
        <input type="text" id="name" placeholder="name" value="Adi Ferdian">
        <input type="email" id="email" placeholder="Email" value="adiferdian7@gmail.com">
        <input type="password" id="password" placeholder="Password" value="Adgjmptw12!">
        <input type="password" id="re-password" placeholder="Re-Password" value="Adgjmptw12!">
        <hr>
        <button id="submit" class="btn btn-primary btn-block btn-large">Register</button>
        <button id="login" class="btn btn-danger btn-block btn-large secondary">Back To Login</button>
</body>
<script>
    const nameRegex = /^\S[a-zA-Z\s'-]{1,100}$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[a-zA-Z\d!@#$%^&*()_+]{8,16}$/;

    $("#submit").on("click", (e) => {
        e.preventDefault();

        const name = $("#name").val();
        const email = $("#email").val();
        const password = $("#password").val();
        const rePassword = $("#re-password").val();

        if (!nameRegex.test(name)) {
            Swal.fire({
                text: "Name must be a string and must not start with a space.",
                position: 'top-end',
                timer: 3000,
                icon: 'error',
                showConfirmButton: false,
            })
            return;
        }

        if (!emailRegex.test(email)) {
            Swal.fire({
                text: "Email must be in the correct format.",
                position: 'top-end',
                timer: 3000,
                icon: 'error',
                showConfirmButton: false,
            })
            return;
        }

        if (!passwordRegex.test(password)) {
            Swal.fire({
                text: "Password must contain at least one uppercase letter, one digit, and one special character.",
                position: 'top-end',
                timer: 3000,
                icon: 'error',
                showConfirmButton: false,
            })
            return;
        }

        if (password !== rePassword) {
            Swal.fire({
                text: "Re-Passwords do not match.",
                position: 'top-end',
                timer: 3000,
                icon: 'error',
                showConfirmButton: false,
            })
            return;
        }

        axios.post("/register", {
            name,
            email,
            password,
        }).then(response => {
            if (response.data.success=true) {
                Swal.fire({
                    text: response.data.message,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000,
                    customClass: {
                        icon: 'my-custom-icon-class'
                    }
                }).then((result) => {
                    console.log(response);
                    // window.location.href = "l051n";
                })
            } else {
                Swal.fire({
                    text: response.data.message,
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000,
                    width: '400px',
                })
            }
        });
    });

    $('#login').on('click', function() {
        window.location.href = "l051n";
    });
</script>

</html>