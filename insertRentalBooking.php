<!-- insertBooking.php -->
<!-- To insert data of insert.php into database. -->
<?php

include("dbase.php");

//Dapatkan Tarikh Dan Masa Masuk
extract( $_POST );
$date = date("d-m-Y", time());
$time = date("H:i:s", time());
$query = "INSERT INTO rentalbooking VALUES('','$bookingDate','$bookingTime','$hour','$price','$points','$driverName','$carModel','$carColour','$platNo','$driverID','$CustomerID')";

if (mysqli_query($conn, $query)) {
      
  $message="Data Inserted";
    echo "<script type = 'text/javascript'>
     alert('$message'); 
     window.location.href=('displayRenting.php');
     </script>"; 
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>
