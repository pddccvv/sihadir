<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$nameApp}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />


    <style>
        .nav-custom {
            width: 27px;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background-color: #78A2CC;
            color: white;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .header-box {
            padding: 20px;
        }

        .custom-profile {
            background: url("images/bg-main.jpeg");
            background-position: center;
        }

        input::placeholder {
            color: white;
        }

        .appbar {
            display: none;
            height: 100px;
            width: 100%;
            background-color: #78A2CC;

        }

        @media screen and (max-width: 768px) {

            .sidebar {
                width: 0;
                display: none;
            }

            .content {
                flex: 1;
                padding: 20px;
                margin-left: 0;
                transition: margin-left 0.3s;
            }

            .content.open {
                margin-left: 250px;
            }

            .appbar {
                display: flex;
                width: 100%;

            }

            .custom-field {
                width: 80%;
            }
        }

        @media screen and (min-width: 769px) {
            .appbar {
                display: none;
            }
        }
    </style>
</head>

<body>
    {{-- APP BAR MOBILE VERSION --}}
    <div class="appbar">
        <div class="mt-5 ps-2">
            <i class="fa-solid fa-arrow-left fa-xl"></i>
        </div>
        <div class="mx-auto mt-5">
            <h1 class="">Sihadir</h1>
        </div>
    </div>
    {{-- END --}}

    <div class="main-container d-flex">
        <!-- SIDEBAR -->
        <div class="sidebar" id="side-nav">
            <div class="header-box custom-profile mb-3">
                <div class="text-center mb-2">
                    <img src="images/profile.png" alt="profile" class="rounded-circle" width="100px">
                </div>
                <div class="text-center">
                    <span class="fw-bold">Ferry Faisal, S.ST., M.T.</span><br>
                    <span>19730206 199501 1 001</span>
                </div>
            </div>
            <div class="d-flex flex-column gap-3 p-2">
                <a href="/" class="text-decoration-none text-white">
                    <img src="icons/absensi.png" alt="" class=" nav-custom"> Absensi</a>
                <a href="/" class="text-decoration-none text-white">
                    <img src="icons/perizinan.png" alt="" class=" nav-custom"> Perizinan</a>
                <a href="/" class="text-decoration-none text-white">
                    <img src="icons/change-password.svg" alt="" class=" nav-custom"> Ganti Password</a>
                <hr>
                <a href="/" class="text-decoration-none text-white">
                    <img src="icons/logout.svg" alt="" class=" nav-custom"> Logout</a>
            </div>
        </div>
        <!-- END -->

        <!-- CONTENT -->
        <div class="content">
            <div class="main-content container-fluid d-block">
                <div class="logo text-center mt-5 mb-3">
                    <img src="icons/key.png" alt="" width="190px" class="custom-icon">
                </div>
                <div class="text-center mb-5">
                    <h2 class="custom-title">Ubah Password</h2>
                    <span class="">Masukkan password lama dan <br> baru anda dibawah ini</span>
                </div>

                <div class="mx-auto mb-5 " style="max-width: 750px;">
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-lock fa-lg"></i>
                        </span>
                        <input type="password" name="password" id="password"
                            class="custom-field form-control rounded-pill shadow col-12" placeholder="Password"
                            style="background-color: #D9D9D9;">
                        <button class="btn btn-secondary" type="button" id="password-toggle">
                            <i class="far fa-eye fa-lg" id="password-icon"></i>
                        </button>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-lock fa-lg"></i>
                        </span>
                        <input type="password" name="newPassword" class="custom-field form-control rounded-pill shadow"
                            placeholder="Password Baru" style="background-color: #D9D9D9;">
                        <button class="btn btn-secondary" type="button" id="password-toggle">
                            <i class="far fa-eye fa-lg" id="password-icon"></i>
                        </button>

                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-lock fa-lg"></i>
                        </span>
                        <input type="password" name="repPassword" class="custom-field form-control rounded-pill shadow"
                            placeholder="Ulangi Password" style="background-color: #D9D9D9;">
                        <button class="btn btn-secondary" type="button" id="password-toggle">
                            <i class="far fa-eye fa-lg" id="password-icon"></i>
                        </button>

                    </div>
                </div>
                <div class="text-center">
                    <button class="btn text-white rounded-pill" style="width:300px; background-color : #757575">Ganti
                        Password</button>
                </div>
            </div>
            <!-- END -->
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+9Knujsl5/6b5aNCXm5i5aR5xSLt4zBn5c7n7f5Em5zjDfm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-mz6fR3HI0VtpMzj7f5vOxkfdz/75P/R6pPZf5F5u+OGpamoFVy38W5P6sl5F5F5u+OGp" crossorigin="anonymous">
    </script>

    <script>
        // Toggle password visibility
        $("#password-toggle").click(function() {
        var passwordInput = $("#password");
        var passwordIcon = $("#password-icon");

        if (passwordInput.attr("type") === "password") {
            passwordInput.attr("type", "text");
            passwordIcon.removeClass("fa-eye").addClass("fa-eye-slash");
        } else {
            passwordInput.attr("type", "password");
            passwordIcon.removeClass("fa-eye-slash").addClass("fa-eye");
        }
        });
        });
    </script>


</body>

</html>
