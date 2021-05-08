<?php
include('connection.php');
$email = $_SESSION['email'];
$id = $_GET['p_id'];

$dr = "select * from provider where p_id=$id";
$showdr = mysqli_query($con,$dr);
$arrdata = mysqli_fetch_array($showdr);
$demail = $arrdata['email'];

$conf = "select * from confirmedride where email='$email' and driver_email='$demail'";
$showconf = mysqli_query($con,$conf);
$confdata = mysqli_fetch_array($showconf);
$c_id= $confdata['c_id'];



echo "<script type=\"text/javascript\">\n";
echo "alert('You have successfully Confirmed a Ride!');\n";
echo "document.location = 'mail.php?c_id='+$c_id+'';\n";
echo "</script>";


?>