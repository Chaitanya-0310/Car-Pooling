<?php
include('connection.php');

$m = $_SESSION['email'];

$check = " select * from details where mail= '$m' ";
$res = mysqli_query($con,$check);
$n = mysqli_num_rows($res);
 
if($n == "0"){
    echo "<script type=\"text/javascript\">\n";
    echo "alert('Please Fill Your Details First.');\n";
    echo "window.location = ('driver.php');\n";
    echo "</script>";
}
?>
<html>
<head>
    <meta  charset="UTF-8">
    <title>Offer a ride</title>
    <link rel="stylesheet" type="text/css" href="style/offeraride.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="text-b">Offer A Ride!</div>
    <form action="ridecontrol.php" method="post">
    <div class="form-group">
        <div id="ride_date_box" style="display:box">
            <label for="ride_date">Ride date:</label>
            <input type="date" id="ride_date" name="ride_date" class="box">
        </div>
    </div>
    
    <div class="form-group">
        <h3>Pickup Location</h3>
        <input type="text" name="pickup" id="pickup" value="" class="box" required >
    </div>

    <div class="form-group">
        <h3>Dropoff Location</h3>
        <input type="text" name="dropoff" id="dropoff" value="" class="box" required >
    </div>

    <div class="form-group">
        <h3>Vehicle Name</h3>
        <input type="text" name="vehicle" id="vehicle" value="" class="box" required >
    </div>

    <div class="form-group">
        <h3>Available Seat</h3>
        <input type="number" name="seat" id="seat" value="" class="box" required >
    </div>

    <div class="form-group">
        <h3 id="deparrtime">Time </h3>
        <input type="time" id="ride_time" name="ride_time" class="box" required>
    </div>

    <div class="form-group">
        <button type="submit" class="box btn">Offer Ride</button>
    </div>      

    </form>

    <?php include('contact.php'); ?>

</body>
</html>