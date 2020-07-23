<!-- insert to database.php -->
<!-- To insert data into database. -->
<?php

include("dbase.php");
extract($_POST);
$query = "INSERT INTO vehicle VALUES('','$driverID','$name','$model','$colour','$registrationno','$license','$noofseater', '$record')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='driverLogin.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>