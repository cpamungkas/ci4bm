<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login :: Building Maintenance Application &copy; 2022 Gramedia</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
    <link rel="script" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
    <link rel="script" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />

    <style>
        .row {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 5%;
        }

        .page {
            width: 100%;
            height: auto;
            min-height: 100vh;
            background-color: #ede7e6;
            background-size: 100% 100%;
            background-position: top center;
            padding: 10px;
        }

        .signintext {
            margin-right: 20% !important;
            /* color: #969799; */
            color: #fff;
        }

        .top {
            color: #64C97D;
        }

        .btn {
            width: 30%;
            margin-top: 5%;
            margin-bottom: 5%;
            margin-left: 50%;

        }

        .ForgotPassBtn {
            background-color: white;
            color: black;
            border-bottom: 1px solid #c7c5c5;
            padding-bottom: 3px;
            text-decoration: none !important;
            margin-right: 20%;
            border-top-color: none;

        }

        .LoginBtn {
            /* border-radius: 25px; */
            /* background-image: url(http://i.imgur.com/S4zmPRw.png); */
            background-image: url(<?= base_url('images/S4zmPRw.png'); ?>);
            border: solid 1px white;

        }

        .signupbtn {
            border-radius: 25px;
            width: 25%;
            margin: auto;
            /* background-image: url(http://i.imgur.com/S4zmPRw.png); */
            background-image: url(<?= base_url('images/S4zmPRw.png'); ?>);
            border: solid 1px white;
            font-size: 10px;
        }

        form {
            padding: 0;
            margin-left: 15%;
        }

        .signin {
            background-color: white;
            padding: 2%;
            /* margin: auto; */
        }

        .signup {
            /* background-image: url(http://i.imgur.com/S4zmPRw.png); */
            background-image: url(<?= base_url('images/S4zmPRw.png'); ?>);
            padding: 2%;
        }

        .form-control {
            width: 80%;
            margin-bottom: 5%;
            margin-top: 5%;
            background-color: #ebe8e8;

        }

        .custom-control {
            margin-bottom: 2%;
        }

        h2.HelloFriend {
            color: #fff !important;
            font-weight: 200px;
            margin-top: 30%;
            margin-bottom: 10%;
        }

        .SignupText {
            color: #fff;
            margin-bottom: 15%;
            font-size: 16px;
            font-weight: 10px !important;
            font-family: Garamond;
        }

        @media only screen and (max-width: 600px) {
            row {
                margin-top: 5%;
                margin-left: 1%;
                margin-right: 1%;
            }
        }

        input,
        input:focus {
            border-width: 0px;
            outline: 0;
            -webkit-appearance: none;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
        }

        .social-btn .btn {
            color: #fff;
            margin: 8px 0 0 30px;
            font-size: 15px;
            width: 45px;
            height: 40px;
            line-height: 25px;
            border-radius: 50%;
            font-weight: normal;
            text-align: center;
            border: solid 0.5px grey;
            transition: all 0.4s;
        }

        .social-btn .btn:first-child {
            margin-left: 0;
        }

        .social-btn .btn:hover {
            opacity: 0.8;
        }

        .social-btn .btn i {
            font-size: 20px;
        }

        .social-btn {
            margin-right: 20%;
            margin-bottom: 7%;
            margin-top: 5%;
        }

        .horizontal-line {
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
        }

        #togglePassword,
        #togglePasswordConfirm {
            float: left;
            vertical-align: bottom;
            text-align: center;
            margin-top: -35px;
            margin-left: 72%;
            cursor: pointer;
        }

        .field-icon {
            float: left;
            margin-left: 72%;
            margin-top: -35px;
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>
    <!--For all screen-->
    <div class="page">
        <!--Login & Signup in single row-->
        <div class="row justify-content-md-center">
            <!--Column for signin-->
            <div class="col-sm-4 text-center" style="background-color:#037154 ;">
                <img src="<?= base_url('images/logobm1.png'); ?>" alt="Logo BM">
            </div>
            <div class="col-sm-4 text-center signup ">
                <!-- Default form login -->
                <form action="<?php echo base_url(); ?>/CSignup/store" method="post">
                    <p class="h4 mb-4 text-center signintext  horizontal-line"><strong>Registration Account</strong></p>
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-warning">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>
                    <!-- Name -->
                    <input type="text" id="name" name="name" class="form-control mb-6" placeholder="&#xf007; Name" style="font-family:Arial, FontAwesome">
                    <!-- Username -->
                    <input type="text" id="username" name="username" class="form-control mb-6" placeholder="&#xf007; Username" style="font-family:Arial, FontAwesome">
                    <!-- Email -->
                    <input type="email" id="email" name="email" class="form-control mb-6" placeholder="&#xf0e0; Email" style="font-family:Arial, FontAwesome">
                    <!-- Password -->
                    <input type="password" id="password" name="password" class="form-control mb-6" placeholder="&#xf023;  Password" style="font-family:Arial, FontAwesome">
                    <i class="fa fa-fw fa-eye-slash" id="togglePassword"></i>
                    <input type="password" id="passwordConfirm" name="passwordConfirm" class="form-control mb-6" placeholder="&#xf023;  Password Confirm" style="font-family:Arial, FontAwesome">
                    <i class="fa fa-fw fa-eye-slash" id="togglePasswordConfirm"></i>
                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block LoginBtn" type="submit">Signup</button>
                </form>
            </div>
            <script>
                const togglePassword = document.querySelector('#togglePassword');
                const password = document.querySelector('#password');

                togglePassword.addEventListener('click', function(e) {
                    // toggle the type attribute
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye-slash');
                });

                const togglePasswordConfirm = document.querySelector('#togglePasswordConfirm');
                const passwordConfirm = document.querySelector('#passwordConfirm');

                togglePasswordConfirm.addEventListener('click', function(e) {
                    // toggle the type attribute
                    const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordConfirm.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye-slash');
                });
            </script>
        </div>
    </div>
</body>

</html>