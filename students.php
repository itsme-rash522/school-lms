<!DOCTYPE html>

<html>

<head>
    <title>Manage | Students</title>
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

    <div class="container">
        <h2 class="text-center py-5 large" style="color: rgb(0, 0, 94);">Students of Royal College</h2>
        <div class="row">
            <table class="t">

                <thead>
                    <tr class="text-start pt-5">
                        <th>No.</th>
                        <th>Full Name</th>
                        <th>Grade</th>
                        <th>Email Address</th>
                        <th>Student ID</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $conn = new mysqli("localhost", "root", "#KHrashi522", "sms1", "3306");

                    $q = "SELECT * FROM `student`";

                    $rs = $conn->query($q);

                    $n = $rs->num_rows;

                    for ($x = 0; $x < $n; $x++) {

                        $d = $rs->fetch_assoc();

                        ?>

                        <tr>
                            <td>
                                <?php echo ($d["id"]); ?>
                            </td>
                            <td>
                                <?php echo ($d["fname"] . " " . $d["lname"]); ?>
                            </td>
                            <td>
                                <?php echo ($d["grade"]); ?>
                            </td>
                            <td>
                                <?php echo ($d["email"]); ?>
                            </td>
                            <td>
                                <?php echo ($d["studentid"]); ?>
                            </td>
                        </tr>

                        <?php

                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <footer class="py-4">
            <hr class="mt-5">
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