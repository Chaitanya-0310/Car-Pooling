<?php

include('connection.php');

$email = $_POST['email'];
$pass = $_POST['password'];

$s_pass = password_hash($pass,PASSWORD_BCRYPT);

$s = " select * from users where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
   echo "<script type=\"text/javascript\">\n";
   echo "alert('Username Already Taken.');\n";
   echo "window.location = ('index1.php');\n";
   echo "</script>";
}
else{
   $reg= " insert into users(email, password) values ('$email', '$s_pass')";
   mysqli_query($con, $reg);
   header('location: index1.php');
   echo" Registration Successful";
}

?>