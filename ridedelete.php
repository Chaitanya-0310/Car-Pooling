<?php
include('connection.php');

$e = $_GET['id'];

$deletequery = " delete from provider where p_id=$e ";
$query = mysqli_query($con,$deletequery);

if($query){
echo "<script type=\"text/javascript\">\n";
echo "alert('Ride Delete Successfully..');\n";
echo "window.location = ('viewofferedride.php');\n";
echo "</script>";
}

?>