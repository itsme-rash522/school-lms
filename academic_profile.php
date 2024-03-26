<!DOCTYPE html>

<html>

<head>
    <title>Academic Officer | My Profile</title>
    <link rel="icon" href="img/micon.svg" />
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>

    <!-- Header -->

    <header class="sticky-top">
        <div class="px-3 py-2 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="academic.php"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <img src="img/rc_logo.svg" class="bi me-2" id="rc_logo" width="40" role="img"
                            aria-label="Bootstrap" />
                        <label for="rc_logo" style="color: rgb(255, 208, 0);">ROYAL COLLEGE</label>
                    </a>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <label for="profie" style="color: white;">
                                <?php

                                session_start();

                                echo ($_SESSION["u"]["fname"] . " " . $_SESSION["u"]["lname"]);

                                ?>
                            </label>&nbsp;
                            <img src="img/profile.png" id="profile" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="academic_profile.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Profile-->

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <div class="bg-light">
        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <img src="img/profile.png" class="d-block mx-auto mb-4 profile_fic" width="80" />
                    <h2>Rashindu Tharinda</h2>
                    <label>Academic Officer <img src="img/verify.png" width="20" /></label>
                </div>

                <div class="row g-5">

                    <div class="col-md-12 col-lg-8 offset-lg-2">
                        <h4 class="mb-3">Personal Details</h4>
                        <form novalidate>
                            <div class="row g-3">

                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>

                                <div class="col-6">
                                    <label for="academicid" class="form-label">Academic Officer ID.</label>
                                    <div>
                                        <input type="text" class="form-control" id="academicid" placeholder="********"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="you@gmail.com">
                                </div>

                                <div class="col-6">
                                    <label for="mobile" class="form-label">Mobile No.</label>
                                    <div>
                                        <input type="text" class="form-control" id="mobile" required>
                                    </div>
                                </div>

                            </div>

                            <hr class="my-4">

                            <h4 class="mb-3">Change Password</h4>

                            <div class="row">
                                <div class="col-6">
                                    <label for="cpassword" class="form-label">Current Password</label>
                                    <div>
                                        <input type="password" class="form-control" id="cpassword" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="npassword" class="form-label">New Password</label>
                                    <div>
                                        <input type="password" class="form-control" id="npassword" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 mb-3">
                                <button class="col-3 btn btn-primary btn-dark btn-sm" onclick="academic_back();">
                                    << Back to Dashboard</button>
                                        <button class="col-3 offset-6 btn btn-primary btn-lg"
                                            type="submit">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->

    <div class="container">
        <footer class="py-5">
            <hr>
            <p class="text-center text-muted">&copy; 2023 Royal College.</p>
        </footer>
    </div>

    <!-- JavaScript Link -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>