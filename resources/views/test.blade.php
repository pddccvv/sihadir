<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none !important;
        }

        .bg-custom {
            background: url('images/bg-main.jpeg') center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 70vh;
        }

        .myform {
            position: relative;
            padding: 1rem;
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 1.1rem;
            padding-bottom: 1rem;
            height: 500px;
        }

        @media screen and (max-width: 768px) {
            .myform {
                max-width: 80%;
                max-height: 80%;
            }
        
        }

        @media screen and (max-width: 576px) {
            .myform {
                max-width: 80%;
            }
        }
    </style>
</head>

<body class="bg-white">
    <div class="container-fluid bg-custom" style="border-radius: 0 0 40px 40px;">
        <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 27px">
            <img src="{{ asset('images/logo-polnep.png') }}" alt="" width="150px" class="mt-5">
        </div>
        <div class="text-center" style="margin-bottom: 97px">
            <h1 class="text-white" style="font-size: 64px">Si Hadir</h1>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-5 mx-auto">
                <div class="myform mb-5">
                    <form action="" method="post" name="login" class="text-center">
                        <div class="form-group mt-3 mt-md-5 mb-5 ">
                            <input type="email" name="email" class="form-control  rounded-pill custom-field" id="email"
                                placeholder="USERNAME" style="">
                        </div>
                        <div class="form-group mb-5" style="position: relative;">
                            <input type="password" name="password" id="password" class="form-control rounded-pill custom-field"
                                placeholder="PASSWORD" style="background-color: #D9D9D9;">
                            <span class="input-group-addon">
                                <i class="fa fa-eye-slash" id="togglePassword"
                                    style="position: absolute; top: 12px; right: 20px; cursor: pointer;"></i>
                            </span>
                        </div>
                        <div class="">
                            <a href="#" >Lupa Password?</a>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary rounded-pill"
                                style="background-color: #78A2CC; width: 100%; max-width: 450px; height: 45px;">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="text-center fixed-bottom">
            <span><b>V.0.1.0</b></span>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA5Dk3P5F5F5f5d5c5F" crossorigin="anonymous">
    </script>
    <script>
        const passwordField = document.getElementById("password");
        const togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", function() {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.className = "fa fa-eye";
            } else {
                passwordField.type = "password";
                togglePassword.className = "fa fa-eye-slash";
            }
        });
    </script>
</body>

</html>
