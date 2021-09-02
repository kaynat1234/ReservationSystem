<html>
<div class="topnav">
        <link rel="stylesheet" href="style.css">
    <h1> Reservation System</h1>
      <a href="home.html">Home</a>
      <a href="register.php">Register</a>
      <a href="login.php">Login</a>
      <a href="logout.php">Logout</a>
    
</div>
    <style>
    body {
        background-image: url('images.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <head>
        <link rel="stylesheet" href="bg.css">
        </head>
<body></body>

</html>
<?php

  
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "user_registration"; 
// Create connection 
$con = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection 
if (!$con) { 
	die("Connection failed: " . mysqli_connect_error()); 
} 