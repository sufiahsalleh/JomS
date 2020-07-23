<!DOCTYPE html>
<html>
<head>
<title>JOM SEWA</title>
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

/* Dropdown Button */
.dropbtn {
  background-color: #00e6ac;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #00cc99;}

.container {
	float: right;
	padding: 20px;
	background-color: #FFFFFF;
	width: 300px;
	margin: 50px;
}

.container1 {
  float: left;
  width: 600px;
}

.container2 {
  float: right;
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
  <h1><b>Welcome To JomSewa</b></h1>
</div>

<div class="container2">
  <br>
  <div class="dropdown">
  <button class="dropbtn">Log In</button>
  <div class="dropdown-content">
    <a href="custlogin.php">Customer</a>
    <a href="driverLogin.php">Driver</a>
    <a href="AdminLogin.php">Admin</a>
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Register</button>
  <div class="dropdown-content">
    <a href="custregister.php">Customer</a>
    <a href="registerdriver.php">Driver</a>
  </div>
  </div>
</div>

</body>
</html>