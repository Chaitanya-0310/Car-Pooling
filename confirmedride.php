<?php
    include('connection.php');
    $m = $_SESSION['email'];
    
    $check = " select * from confirmedride where email= '$m' ";
    $r = mysqli_query($con,$check);
    $n = mysqli_num_rows($r);
                 
    if($n != "0"){
?>
<html>
<head>
    <title>View Confirmed Ride</title>
    <link rel="stylesheet" type="text/css" href="style/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="table1">
    <div class="text-b">Offered Ride!</div>
        <table>
            <thead>
                <tr>
                    <th>E-mail</th>
                    <th>Driver E-mail</th>
                    <th>Date of Ride</th>
                    <th>Pickup</th>
                    <th>Dropoff</th>
                    <th>Vehicle</th>
                    <th>Required Seat</th>
                    <th>Time(24hr)</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    while($res = mysqli_fetch_assoc($r)){
                        ?>
                        <tr>
                        <td><?php echo $res['email']; ?> </td>
                        <td><?php echo $res['driver_email']; ?> </td>
                        <td><?php echo $res['date']; ?> </td>
                        <td><?php echo $res['pickup']; ?> </td>
                        <td><?php echo $res['dropoff']; ?> </td>
                        <td><?php echo $res['vehicle']; ?> </td>
                        <td><?php echo $res['rseat']; ?> </td>
                        <td><?php echo $res['time']; ?> </td>
                        </tr>
                        <?php
                }
            ?>
            </tbody>
        
        </table>
    
    </div>
    <?php include('contact.php'); ?>


</body>
</html>
<?php
    }
    else{
        echo "<script type=\"text/javascript\">\n";
        echo "alert('OOPS...No Confirmed Ride!!');\n";
        echo "window.location = ('main.php');\n";
        echo "</script>";    
    }
?>