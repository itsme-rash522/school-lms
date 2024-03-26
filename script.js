function login() {
    window.location = "login.php";
}

function signup() {
    window.location = "signup.php";
}

function results() {
    window.location = "results.php";
}

function lessons() {
    window.location = "lessons.php";
}

function mylessons() {
    window.location = "mylessons.php";
}

function assignments() {
    window.location = "assignments.php";
}

function payment() {
    window.location = "payment.php";
}

function students() {
    window.location = "students.php";
}

function addresult() {
    window.location = "addresult.php";
}


function admin_back() {
    window.location = "admin.php";
}

function teacher_back() {
    window.location = "teacher.php";
}

function student_back() {
    window.location = "student.php";
}

function academic_back() {
    window.location = "academic.php";
}

// Global Bootstrap: false //
(() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()

// Login Admin //

function login_admin() {

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var rm = document.getElementById("rm");

    var f = new FormData();
    f.append("email", email.value);
    f.append("password", password.value);
    f.append("rm", rm.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "admin.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "login_admin_process.php", true);
    r.send(f);

}

// Login Teacher //

function login_teacher() {

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var rm = document.getElementById("rm");

    var f = new FormData();
    f.append("email", email.value);
    f.append("password", password.value);
    f.append("rm", rm.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "teacher.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "login_teacher_process.php", true);
    r.send(f);

}

// Login Students //

function login_student() {

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var rm = document.getElementById("rm");

    var f = new FormData();
    f.append("email", email.value);
    f.append("password", password.value);
    f.append("rm", rm.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "student.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "login_student_process.php", true);
    r.send(f);

}

// Login Academic //

function login_academic() {

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var rm = document.getElementById("rm");

    var f = new FormData();
    f.append("email", email.value);
    f.append("password", password.value);
    f.append("rm", rm.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "academic.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "login_academic_process.php", true);
    r.send(f);

}

function payhere() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var txt = r.responseText;

            // Payment completed. It can be a successful failure.
            payhere.onCompleted = function onCompleted(orderId) {
                console.log("Payment completed. OrderID:" + orderId);
                // Note: validate the payment and show success or failure page to the customer
            };

            // Payment window closed
            payhere.onDismissed = function onDismissed() {
                // Note: Prompt user to pay again or show an error page
                console.log("Payment dismissed");
            };

            // Error occurred
            payhere.onError = function onError(error) {
                // Note: show an error page
                console.log("Error:" + error);
            };

            // Put the payment variables here
            var payment = {
                "sandbox": true,
                "merchant_id": "1222646",    // Replace your Merchant ID
                "return_url": "http://localhost/assignment2/success.php",     // Important
                "cancel_url": "http://localhost/assignment2/error.php",     // Important
                "notify_url": "http://sample.com/notify",
                "order_id": "#STUDENT_PAY",
                "items": "MONTHLY SERVICE PAYMENT",
                "amount": "3000.00",
                "currency": "LKR",
                "hash": txt, // *Replace with generated hash retrieved from backend
                "first_name": "Sahan",
                "last_name": "Perera",
                "email": "sahanp@gmail.com",
                "phone": "0771234567",
                "address": "No.1, Galle Road",
                "city": "Colombo",
                "country": "Sri Lanka",
                "delivery_address": "No. 46, Galle road, Kalutara South",
                "delivery_city": "Kalutara",
                "delivery_country": "Sri Lanka",
            };

            // Show the payhere.js popup, when "PayHere Pay" is clicked
            payhere.startPayment(payment);
            // document.getElementById('payhere-payment').onclick = function (e) {

            // };

        }
    }

    r.open("GET", "payment_process.php", true);
    r.send();

}






















