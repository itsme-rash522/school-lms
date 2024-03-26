<!DOCTYPE html>

<html>

<head>
    <title>Login</title>
    <link rel="icon" href="img/micon.svg" />
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body class="b2">

    <!-- Header -->

    <header class="p-2 text-bg-dark">
        <div class="container">
            <div class="text-center">
                <img src="img/rc_logo.svg" alt="" width="40" />
            </div>
        </div>
    </header>

    <div class="container px-4 py-5" id="hanging-icons">

        <h1 class="pb-2 border-bottom">Login with your category</h1>

        <div class="row g-4 ps-5 py-5 mt-4 row-cols-1 row-cols-lg-3">

            <div class="col-6 col-lg-3 d-flex">
                <div class="c">
                    <a href="login_admin.php" style="text-decoration: none;">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <img src="img/icon1.png" alt="admin" width="80">
                        </div>
                        <div class="pt-4" style="color: rgb(255, 208, 0); font-weight: bold;">
                            <h3>Admin</h3>
                        </div>
                    </a>
                </div>

            </div>

            <div class="col-6 col-lg-3 d-flex">
                <div class="c">
                    <a href="login_teacher.php" style="text-decoration: none;">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <img src="img/icon2.png" alt="teacher" width="80">
                        </div>
                        <div class="pt-4" style="color: rgb(255, 208, 0); font-weight: bold;">
                            <h3>Teacher</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-6 col-lg-3 d-flex">
                <div class="c">
                    <a href="login_student.php" style="text-decoration: none;">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <img src="img/icon3.png" alt="student" width="85">
                        </div>
                        <div class="pt-4" style="color: rgb(255, 208, 0); font-weight: bold;">
                            <h3>Student</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-6 col-lg-3 d-flex text-center">
                <div class="c">
                    <a href="login_academic.php" style="text-decoration: none;">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <img src="img/icon4.png" alt="academic Officer" width="75">
                        </div>
                        <div class="pt-4" style="color: rgb(255, 208, 0); font-weight: bold;">
                            <h3>Academic <br /> Officer</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>

    <div class="container">
        <footer class="pt-4 mt-5">
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