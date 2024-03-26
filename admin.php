<!DOCTYPE html>

<html>

<head>
    <title>Admin | Dashboard</title>
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

<body class="b4">

    <!-- Header -->

    <header class="sticky-top">
        <div class="px-3 py-2 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="admin.php"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <img src="img/rc_logo.svg" class="bi me-2" id="rc_logo" width="40" role="img"
                            aria-label="Bootstrap" />
                        <label for="rc_logo" style="color: rgb(255, 208, 0);">ROYAL COLLEGE</label>
                    </a>

                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <label for="profie" style="color: white;">Rashindu Tharinda</label>&nbsp;
                            <img src="img/profile.png" id="profile" alt="mdo" width="32" height="32"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="admin_profile.php">Profile</a></li>
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

    <!-- Sidebar -->

    <div class="flex-shrink-0 p-3 bg-white main">

        <style>
            .btn-toggle:hover,
            .btn-toggle:focus {
                color: rgba(0, 0, 0, .85);
                background-color: #d2f4ea;
            }

            .btn-toggle::before {
                width: 1.25em;
                line-height: 0;
                content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
                transition: transform .35s ease;
                transform-origin: .5em 50%;
            }

            .btn-toggle[aria-expanded="true"]::before {
                transform: rotate(90deg);
            }

            .btn-toggle-nav a {
                padding: .1875rem .5rem;
                margin-top: .125rem;
                margin-left: 1.25rem;
            }

            .btn-toggle-nav a:hover,
            .btn-toggle-nav a:focus {
                background-color: #d2f4ea;
            }
        </style>



        <div class="sidebar">

            <div class="text-center">
                <a href="admin.php" class="fs-5 fw-semibold"
                    style="text-decoration: none; color: rgb(0, 0, 94);">Dashboard</a>
                <hr>
            </div>

            <ul class="list-unstyled p-4">

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        <i class="fa-sharp fa-solid fa-sliders"></i>&nbsp;&nbsp;Manage
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="admins.php" class="link-dark d-inline-flex text-decoration-none rounded"><i
                                        class="fa-solid fa-user-gear mt-1"></i>&nbsp;&nbsp;Administration</a>
                            </li>
                            <li><a href="teachers.php" class="link-dark d-inline-flex text-decoration-none rounded"><i
                                        class="fa-solid fa-user-tie mt-1 pe-1"></i>&nbsp;&nbsp;Teachers</a>
                            </li>
                            <li><a href="students.php" class="link-dark d-inline-flex text-decoration-none rounded"><i
                                        class="fa-solid fa-users mt-1"></i>&nbsp;&nbsp;Students</a>
                            </li>
                            <li><a href="academic_officers.php"
                                    class="link-dark d-inline-flex text-decoration-none rounded"><i
                                        class="fa-solid fa-user-shield mt-1"></i>&nbsp;&nbsp;Academic
                                    Officers</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"
                        onclick="results();">
                        <i class="fa-solid fa-list-check"></i>&nbsp;&nbsp;Check Results
                    </button>
                </li>

                <li class="border-top my-3"></li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>&nbsp;&nbsp;My Profile
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="admin_profile.php"
                                    class="link-dark d-inline-flex text-decoration-none rounded"><i
                                        class="fa-solid fa-address-card mt-1"></i>&nbsp;&nbsp;Update
                                    Profile</a>
                            </li>
                            <li><a href="admin_profile.php#change_password"
                                    class="link-dark d-inline-flex text-decoration-none rounded"><i
                                        class="fa-solid fa-key mt-1"></i>&nbsp;&nbsp;Change
                                    Password</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-2">
                <h1 class="display-4 fw-bold lh-1 mb-3" style="color">ROYAL COLLEGE</h1>
                <h3 class="display-5 fw-bold lh-1 mb-3" style="color: rgb(255, 208, 0);">STUDENT MANAGEMENT SYSTEM</h3>
                <p class="lead">Royal College Student Management Application System.</p>
            </div>

        </div>
        <div class="row">
            <div class="col-6 col-lg-5 offset-lg-2">
                <img src="img/lms2.png" width="400" class="img-fluid" style="border-radius: 10px;">
            </div>
            <div class="col-6 col-lg-5">
                <img src="img/lms4.png" width="400" class="img-fluid pt-5" style="border-radius: 10px;">
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