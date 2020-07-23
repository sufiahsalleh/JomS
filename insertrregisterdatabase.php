<!-- insert to database.php -->
<!-- To insert data into database. -->
<?php

include("dbase.php");
extract($_POST);
$query = "INSERT INTO driver VALUES('','$username','$name','$password','$email','$phoneNo','$age','$ic','$address','$Date','$services','$status')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='vehicleregistration.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>