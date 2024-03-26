<!DOCTYPE html>

<html>

<head>
    <title>Login | Admin</title>
    <link rel="icon" href="img/micon.svg" />
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body class="b3">

    <!-- Header -->

    <header class="p-2 text-bg-dark">
        <div class="container">
            <div class="text-center">
                <img src="img/rc_logo.svg" alt="" width="40" />
            </div>
        </div>
    </header>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">

            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3" style="color">ROYAL COLLEGE</h1>
                <h3 class="display-5 fw-bold lh-1 mb-3" style="color: rgb(255, 208, 0);">STUDENT MANAGEMENT SYSTEM</h3>
                <p class="col-lg-10 fs-3">Admin Login.</p>
            </div>

            <div class="col-md-10 mx-auto col-lg-5">

                <form class="p-4 p-md-5 border rounded-3 bg-light">

                    <?php

                    if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])) {

                        ?>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="email" placeholder="Email Address"
                                value="<?php echo $_COOKIE["email"] ?>" />
                            <label>Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                value="<?php echo $_COOKIE["password"] ?>" />
                            <label>Password</label>
                        </div>

                        <?php

                    } else {

                        ?>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="email" placeholder="Email Address" />
                            <label>Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" />
                            <label>Password</label>
                        </div>

                        <?php

                    }

                    ?>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me" id="rm"> Remember me
                        </label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" onclick="login_admin();">Log in</button>

                </form>

            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-2">
            <hr>
            <p class="text-center text-muted">&copy; 2023 Royal College.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>