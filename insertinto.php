<!-- insertinto.php -->
<!-- To insert data of custregister.php into database. -->
<?php

include("dbase.php");

extract( $_POST );
$Cust_Date = date("d-m-Y");
$query = "INSERT INTO customer VALUES('','$username','$name','$password','$email' ,'$phoneNo', '$Cust_Date')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type = 'text/javascript'> 
		 window.location.href=('custlogin.php');
		 </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>