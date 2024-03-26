<!DOCTYPE html>

<html>

<head>
    <title>Student Management System</title>
    <link rel="icon" href="img/micon.svg" />
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body class="b1">

    <!-- Header -->

    <header class="p-2 text-bg-dark">
        <div class="container">
            <div class="text-center">
                <img src="img/rc_logo.svg" alt="" width="40" />
            </div>
        </div>
    </header>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/lms1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold lh-1 mb-3" style="color">ROYAL COLLEGE</h1>
                <h3 class="display-5 fw-bold lh-1 mb-3" style="color: rgb(255, 208, 0);">STUDENT MANAGEMENT SYSTEM</h3>
                <p class="lead">Royal College Student Management Application System.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" onclick="login();">LOGIN</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="signup();">SIGN
                        UP</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>