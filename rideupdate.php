<html>
<head>
    <meta  charset="UTF-8">
    <title>Update Offered ride</title>
    <link rel="stylesheet" type="text/css" href="style/offeraride.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <form action="" method="post">
    <div class="text-b">Offer A Ride!</div>
    <?php 
        include('connection.php');

        $e = $_GET['id'];
        $showquery = "select * from provider where p_id={$e}";
        $showdata = mysqli_query($con,$showquery);

        $arrdata = mysqli_fetch_assoc($showdata);

        if (isset($_POST['submit'])){

            $idupdate = $_GET['id'];

            $date = $_POST['ride_date'];
            $pickup = $_POST['pickup'];
            $dropoff = $_POST['dropoff'];
            $vehicle = $_POST['vehicle'];
            $seat = $_POST['seat'];
            $time = $_POST['ride_time'];
            $email = $_SESSION['email'];
            
            $query = " update provider set p_id='$idupdate', `email`='$email',`date`='$date',`pickup`='$pickup',`dropoff`='$dropoff',`vehicle`='$vehicle',`seat`='$seat',`time`='$time' where p_id=$idupdate ";

            $res=mysqli_query($con, $query);
            $_SESSION['seat'] = $seat;
            if($res){
            echo "<script type=\"text/javascript\">\n";
            echo "alert('You have successfully Updated Your Ride!');\n";
            echo "window.location = ('viewofferedride.php');\n";
            echo "</script>";
            }
        }
        
    ?>
    <div class="form-group">
        <div id="ride_date_box" style="display:box">
            <label for="ride_date">Ride date:</label>
            <input type="date" id="ride_date"  value="<?php echo $arrdata['date']; ?>" name="ride_date" class="box">
        </div>
    </div>
    
    <div class="form-group">
        <h3>Pickup Location</h3>
        <input type="text" name="pickup" id="pickup" value="<?php echo $arrdata['pickup']; ?>" class="box" required >
    </div>

    <div class="form-group">
        <h3>Dropoff Location</h3>
        <input type="text" name="dropoff" id="dropoff" value="<?php echo $arrdata['dropoff']; ?>" class="box" required >
    </div>

    <div class="form-group">
        <h3>Vehicle Name</h3>
        <input type="text" name="vehicle" id="vehicle" value="<?php echo $arrdata['vehicle']; ?>" class="box" required >
    </div>

    <div class="form-group">
        <h3>Available Seat</h3>
        <input type="number" name="seat" id="seat" value="<?php echo $arrdata['seat']; ?>" class="box" required >
    </div>

    <div class="form-group">
        <h3 id="deparrtime">Time </h3>
        <input type="time" id="ride_time" value="<?php echo $arrdata['time']; ?>" name="ride_time" class="box" required>
    </div>

    <div class="form-group">
        <button type="submit" name="submit" class="box btn">Update Ride</button>
    </div>

    </form>

    <?php include('contact.php'); ?>

</body>
</html>