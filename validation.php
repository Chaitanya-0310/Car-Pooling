<?php
include('connection.php');

$email = $_POST['email'];
$pass = $_POST['password'];


$email_search = "select * from users where email = '$email'";
$query = mysqli_query($con,$email_search);

$email_count=mysqli_num_rows($query);

if($email_count == 1){
    $email_pass = mysqli_fetch_assoc($query);

    $db_pass = $email_pass['password'];

    $pass_decode = password_verify($pass, $db_pass);

    if($pass_decode){
        $_SESSION['email'] = $email;
        header('location:main.php');
    }
    else{
        echo "<script type=\"text/javascript\">\n";
        echo "alert('Invalid Password.');\n";
        echo "window.location = ('index1.php');\n";
        echo "</script>";
    }
}
else{
    echo "<script type=\"text/javascript\">\n";
    echo "alert('Invalid E-mail.');\n";
    echo "window.location = ('index1.php');\n";
    echo "</script>";
}


?>