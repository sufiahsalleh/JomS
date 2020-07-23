<!-- insert to database.php -->
<!-- To insert data into database. -->
<?php

include("dbase.php");
extract($_POST);

$query = "INSERT INTO driveraccount VALUES('','$driverID','$username','$name','$password','$email','$phoneNo','$age','$ic','$address','$Date','$services','$status','$accstatus')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='approveaccountdriver.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>