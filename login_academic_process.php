<?php

session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$rm = $_POST["rm"];

if (empty($email)) {
    echo ("Please enter your Email first.");
} else if (strlen($email) > 100) {
    echo ("Email must have less than 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email address");
} else if (empty($password)) {
    echo ("Please enter your Password.");
} else if (strlen($password) < 5 || strlen($password) > 10) {
    echo ("Invalid Password");
} else {

    $dbms = new mysqli("localhost", "root", "#KHrashi522", "sms1", "3306");
    $q = "SELECT * FROM `academic` WHERE `email`='" . $email . "' AND `password`='" . $password . "'";

    $rs = $dbms->query($q);
    $num = $rs->num_rows;

    if ($num == 1) {

        $d = $rs->fetch_assoc();
        $_SESSION["u"] = $d;

        echo ("success");

        if ($rm == "true") {

            setcookie("email", $email, time() + (60 * 60 * 24));
            setcookie("password", $password, time() + (60 * 60 * 24));

        }
    } else {
        echo ("Incorrect Email Address or Password!!!");
    }
}

?>