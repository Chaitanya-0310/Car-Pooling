<?php
include('connection.php');

$p = $_SESSION['email'];

$check = " select * from details where mail= '$p' ";
$res = mysqli_query($con,$check);
$s = mysqli_num_rows($res);
 
if($s == "0"){
    echo "<script type=\"text/javascript\">\n";
    echo "alert('Please Fill Your Details First.');\n";
    echo "window.location = ('passenger.php');\n";
    echo "</script>";
}

?>

<html>
<head>
    <title>Find a Ride</title>
    <link rel="stylesheet" type="text/css" href="style/table.css">    
</head>
<body> 
    <?php include('nav.php'); ?>
    <div class="table1">
    <div class="text-b">Find A Ride!</div>
        <table>
            <thead>
                <tr>
                    <th>E-mail</th>
                    <th>Date of Ride</th>
                    <th>Pickup</th>
                    <th>Dropoff</th>
                    <th>Vehicle</th>
                    <th>Available Seat</th>
                    <th>Time(24hr)</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                
                $selectquery = " select * from provider where seat>0";
                $query = mysqli_query($con,$selectquery);

                $nums = mysqli_num_rows($query);
                while($res = mysqli_fetch_assoc($query)){
            ?>    
                <tr>
                    <td><?php echo $res['email']; ?> </td>
                    <td><?php echo $res['date']; ?> </td>
                    <td><?php echo $res['pickup']; ?> </td>
                    <td><?php echo $res['dropoff']; ?> </td>
                    <td><?php echo $res['vehicle']; ?> </td>
                    <td><?php echo $res['seat']; ?> </td>
                    <td><?php echo $res['time']; ?> </td>
                    <td><button type="submit" class="box btn"><a href="seat.php?id=<?php echo $res['p_id']; ?>">Select Ride</button></td>
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