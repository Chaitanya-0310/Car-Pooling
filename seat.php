<?php 
include('connection.php');
$id = $_GET['id'];

echo '<script type="text/javascript"> ';
echo 'var rs = prompt("Please enter your Required Seat", "");'; 
echo "document.location = 'changeseat.php?rseat='+rs+'&p_id='+$id+''; </script>"; 
?>