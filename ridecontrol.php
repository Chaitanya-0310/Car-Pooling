<?php 

include('connection.php');

$date = $_POST['ride_date'];
$pickup = $_POST['pickup'];
$dropoff = $_POST['dropoff'];
$vehicle = $_POST['vehicle'];
$seat = $_POST['seat'];
$time = $_POST['ride_time'];
$email = $_SESSION['email'];


$reg= " insert into provider(email, date, pickup, dropoff, vehicle, seat, time) values ('$email','$date', '$pickup', '$dropoff', '$vehicle', '$seat', '$time')";
mysqli_query($con, $reg);
echo "<script type=\"text/javascript\">\n";
echo "alert('You have successfully offered a Ride!');\n";
echo "window.location = ('main.php');\n";
echo "</script>";

?>