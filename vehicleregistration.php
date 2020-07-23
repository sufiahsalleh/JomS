</body>
</html>
<head>
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

<form action="insertregistervehicledatabase.php" method="post">

 <div class="container">
  <h3><b>Register Vehicle</b></h3>
  
    
  <label for="driverID"><b>Driver id</b></label>
    <input type="text" placeholder="Enter driverID" name="driverID" required>
  
  <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

  <label for="model"><b>Car Model</b></label>
    <input type="text" placeholder="Enter car model" name="model" required>
  
  <label for="colour"><b>Car Colour</b></label>
    <input type="text" placeholder="Enter colour" name="colour" required>
  
  <label for="registrationno"><b>Registration No</b></label>
    <input type="text" placeholder="Enter registrationno" name="registrationno" required>
  
  <label for="license"><b>License</b></label>
    <input type="text" placeholder="Enter license" name="license" required>

    <label for="record"><b>Record</b></label>
    <input type="text" placeholder="Enter Record" name="record" required>
  <br><br>
  <label for="Date"><b>No of Seater</b></label><br>
    <input type="radio" name="noofseater" value="4">4<br>
    <input type="radio" name="noofseater" value="6">6<br>
  <br> <br>
        
    <button type="submit">Register</button>
    <a href="registerdriver.php" class="cancelbtn">Cancel</a>

  
  <br> <br>
  </div>

</form>
</body>
</html>
