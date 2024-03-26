<!DOCTYPE html>

<html>

<head>
    <title>Sign Up</title>
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
                <p class="col-lg-10 fs-3">Sign up to Royal College Student Management Application System.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" placeholder="Email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input type="password" class="form-control" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" placeholder="Password">
                        <label for="floatingPassword">OTP Code</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            By clicking Sign up, you agree to the terms of use.
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="login_admin();">Sign up</button>
                </form>
            </div>
        </div>
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