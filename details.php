<?php 

include('connection.php');

$name = $_POST['name'];
$gender = $_POST['gender'];
$num = $_POST['num'];
$mail = $_POST['mail'];
$address = $_POST['address'];

$s = " select * from details where mail = '$mail' ";
$result = mysqli_query($con, $s);
$n = mysqli_num_rows($result);

$_SESSION['n'] = $n;
$reg= " insert into details(name, gender, num, mail, address) values ('$name', '$gender', '$num', '$mail', '$address')";
mysqli_query($con, $reg);
$_SESSION['mail'] = $mail;

echo "<script type=\"text/javascript\">\n";
echo "alert('Details Entered Successfully..');\n";
echo "window.location = ('offeraride.php');\n";
echo "</script>";

?>