<?php
include ("dbase.php");

extract ($_POST);

$query = "UPDATE feedback SET name = '$name', date = '$date', rating = '$rating', comment = '$comment' WHERE feebackID = '$feebackID'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in feedbackedit.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='feedbackview.php' </script>";
}
?>