<?php

$merchant_id = "1222646";
$order_id = "#STUDENT_PAY";
$amount = "3000.00";
$currency = "LKR";
$merchant_secret = "MzM1OTM5NjMzODIwMzQxMDQ3NjI3ODQxNjM5ODkzODYxMTE3OTU1";

$hash = strtoupper(
    md5(
        $merchant_id .
        $order_id .
        number_format($amount, 2, '.', '') .
        $currency .
        strtoupper(md5($merchant_secret))
    )
);

echo ($hash);

?>