</body>
</html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-image: url("Driver-passenger-2000.jpg");
  background-size: 120%;
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

<form action="insertrregisterdatabase.php" method="post">

  <div class="container">
  <h3><b>Register Driver</b></h3>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	
	<label for="phoneNo"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phoneNo" required>
	
	<label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" required>
	
	<label for="ic"><b>IC Number</b></label>
    <input type="text" placeholder="Enter IC Number" name="ic" required>
	
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" required>
	
	<label for="Date"><b>Date</b></label><br>
  <input type="date" placeholder="Enter date" name="Date" required>
  <br><br>
	<label><b>Services</b></label>
  <br>
        <label class="radio-inline">
        <input type="radio" name="services" id="radio_experience" value="grab" >
        Grab 
        </label>
        <label class="radio-inline">
        <input type="radio" name="services" id="radio_experience" value="rent" >
        Rent 
        </label>
	<br><br>
	<label><b>Status</b></label>
  <br>
        <label class="radio-inline">
        <input type="radio" name="status" id="radio_experience" value="available" >
        Available 
        </label>
        <label class="radio-inline">
        <input type="radio" name="status" id="radio_experience" value="unavailable" >
        Unavailable 
        </label>
  <br><br>
  <button type="submit">Register</button>
  <a href="index.php" class="cancelbtn">Cancel</a>
  <br>
  </form>
    <label>
      Already a member? <a href="driverLogin.php">Log In</a>
    </label>
  <br> <br>

  </div>

</form>
</body>
</html>
