<!DOCTYPE html>
<html>
<head>
<title>CUSTOMER REGISTRATION</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
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

<form action="insertinto.php" method="post">

  <div class="container">
	<h3><b>Register Customer </b></h3>
	 <form method="post" action="insertinto.php">
	 
	    <label for="name"><b>Name</b></label>
	    <input type="text" name="name" placeholder="Enter Name" required>

      <label for="name"><b>Username</b></label>
      <input type="text" name="username" placeholder="Enter Name" required>
	
	    <label for="fname"><b>Email</b></label>
	    <input type="text" name="email" placeholder="Enter Email" required>
	 
	    <label for="lname"><b>Phone Number</b></label>
	    <input type="text" name="phoneNo" placeholder="Enter Phone Number" required>
	
	    <label for="password"><b>Password</b></label>
	    <input type="password" name="password" placeholder="Enter Password" required>

	    <label for="password2"><b>Confirm Password</b></label>
	    <input type="password" name="pword2" placeholder="Confirm Password" required>
	
	<br>
	<button type="submit">Register</button>
	<a href="index.php" class="cancelbtn">Cancel</a>
	<br>
	</form>
    <label>
      Already a member? <a href="custlogin.php">Log In</a>
    </label>
	<br> <br>
  </div>
</form>
</body>
</html>