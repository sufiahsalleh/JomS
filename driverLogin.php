<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST"){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  $check="SELECT * FROM driveraccount WHERE username='".$user."' AND password='".$pass."'";
  
    $con=mysqli_connect("127.0.0.1","root","") or die(mysqli_connect_error());  
  
    mysqli_select_db($con, "project") or die(mysqli_error());  
  
    $query=mysqli_query($con, $check);  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: driverinterface.php");  
    }  
    } else {  
    // set message
    $message="Account Is Not Approved!";
    echo "<script type = 'text/javascript'>
     alert('$message'); 
     window.location.href=('driverLogin.php');
     </script>"; 
    }  
  
} else {  
    // set message
    $message="All fields is required";
    echo "<script type = 'text/javascript'>
     alert('$message'); 
     window.location.href=('driverLogin.php');
     </script>";;  
}  
}  
?> 

<!DOCTYPE html>
<html>
<head>
  <title>DRIVER LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
	background-image: url("Driver-passenger-2000.jpg");
	background-size: 100%;
	background-repeat: no-repeat;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

p{
	text-align: center;
}

h1,h2,h3,h4,h5,h6{
  text-align: center;
}

button {
  background-color: #3ca1c3;
  color: white;
  padding: 11px 18px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  background-color: #f44336;
  color: white;
  padding: 10px 18px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

.container {
	float: right;
	padding: 20px;
	background-color: #FFFFFF;
	width: 300px;
	margin: 50px;
}

.container1 {
  float: center;
  width: 300px;
}

a:link {
  text-decoration: none;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
      width: auto;
  }
}
</style>
</head>
<body>

<div class="container1">
  <h1><b>JomSewa</b></h1>
</div>

<form action="" method="POST">

  <div class="container">
	<h3><b>Login Driver</b></h3>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <a href="index.php" class="cancelbtn">Cancel</a>
    <br>
    <label>
      Not yet a member? <a href="registerdriver.php">Sign up</a>
    </label>
	<br> <br>
  </div>
</form>

</body>
</html>
