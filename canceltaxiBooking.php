<!-- delete.php -->
<!-- To delete one particular data. -->

<?php

include("dbase.php");

$idURL = $_GET['id'];

$query = "DELETE FROM taxibooking WHERE taxibookingID = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in canceltaxiBooking.php");

if($result){
 $message="Your Booking Has Been Cancelled";
    echo "<script type = 'text/javascript'>
     alert('$message'); 
     window.location.href=('bookingMenu.php');
     </script>"; 
	
}
?>