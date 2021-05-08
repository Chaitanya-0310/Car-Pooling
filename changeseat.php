<?php 
include('connection.php');
$rseat = $_GET['rseat'];
$email = $_SESSION['email'];
$id = $_GET['p_id'];


$dr = "select * from provider where p_id=$id";
$showdr = mysqli_query($con,$dr);
$arrdata = mysqli_fetch_assoc($showdr);

$date = $arrdata['date'];
$pickup = $arrdata['pickup'];
$dropoff = $arrdata['dropoff'];
$vehicle = $arrdata['vehicle'];
$time = $arrdata['time'];
$demail = $arrdata['email'];


if($rseat>0 && $rseat<=$arrdata['seat']){
$reg= " insert into confirmedride(email, driver_email, date, pickup, dropoff, vehicle, rseat, time) values ('$email', '$demail', '$date', '$pickup', '$dropoff', '$vehicle', '$rseat', '$time')";
mysqli_query($con, $reg);
$fseat = $arrdata['seat'] - $rseat;

$query = " update provider set p_id='$id', `email`='$demail',`date`='$date',`pickup`='$pickup',`dropoff`='$dropoff',`vehicle`='$vehicle',`seat`='$fseat',`time`='$time' where p_id=$id ";
$q = mysqli_query($con, $query);

echo '<script type="text/javascript"> '; 
echo "document.location = 'formail.php?p_id='+$id+''; </script>"; 

}
else{
    echo "<script type=\"text/javascript\">\n";
    echo "alert('Required seat is greater than available seat or You have entered less than 1 number of seat.');\n";
    echo "window.location = ('displayride.php');\n";
    echo "</script>";

}

?>