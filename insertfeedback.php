<!-- insertinto.php -->
<!-- To insert data of custregister.php into database. -->
<?php

include("dbase.php");

extract( $_POST );
$query = "INSERT INTO feedback VALUES('','$name','$date','$rating','$comment')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type = 'text/javascript'> 
		 window.location.href=('feedbackview.php');
		 </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>