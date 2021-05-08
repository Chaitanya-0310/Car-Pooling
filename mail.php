<?php
include('connection.php');

$email = $_SESSION['email'];
$c_id = $_GET['c_id'];

$conf = "select * from confirmedride where c_id=$c_id";
$showconf = mysqli_query($con,$conf);
$confdata = mysqli_fetch_array($showconf);
$demail = $confdata['driver_email'];

$dr = "select * from details where mail='$email'";
$showdr = mysqli_query($con,$dr);
$arrdata = mysqli_fetch_array($showdr);
$name = $arrdata['name'];
$num = $arrdata['num'];

$to_email = "$demail";
$subject = "About your Offered Ride.";
$body = "Hi, {$name} has selected your ride. For contact {$name}, number is {$num} and E-mail id is {$email}. ";
$headers = "From: mihirmodi1021@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "<script type=\"text/javascript\">\n";
    echo "alert('Email successfully sent to provider.');\n";
    echo "window.location = ('main.php');\n";
    echo "</script>";
} else {
    echo "<script type=\"text/javascript\">\n";
    echo "alert('Email sending Fail...');\n";
    echo "window.location = ('displayride.php');\n";
    echo "</script>";
}
?>