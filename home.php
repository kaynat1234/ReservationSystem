<html>
  <style>
form{
  margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 250px;  
    margin-left: 250px;
   
    float:left;
    background-color:lightGrey;
    border: 1px solid black;
    padding: 1.5%;
    text-align: center;
    width: 50;
    height:250;
}
</style>
<div class="topnav">
        <link rel="stylesheet" href="style.css">
    <h1> Reservation System</h1>
      <a href="home.php">Home</a>
      <a href="register.php">Register</a>
      <a href="login.php">Login</a>
      
    
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
<body>
  
    <h1>LETS DO YOUR RESERVATION</h1>
   
    <form action="" method="POST" style="width:500; display:inline!important; margin: 0; padding: 0;" >  
    
   <br>
     
Name:<input type="text" id="fname" name="fname"><br>
  <br>  
 User Name:<input type="text" id="fname" name='user'><br>
  </select>
  <br>
  Reservation date:  <input type="date" id="checkin" name='res' class="gui-input" required="" placeholder="mm/dd/yyyy" ><br><br>
        <span class="field-icon"><i class="fa fa-calendar"></i></span>
  Time Slot:

<select name="time" id="cars">
  <option value="9am-10am">9am-10am</option>
  <option value="10am-11am">10am-11am</option>
  <option value="11am-12pm">11am-12pm</option>
  <option value="12pm-1pm">12pm-1pm</option>
  <option value="1pm-2pm">1pm-2pm</option>
  <option value="2pm-3pm">2pm-3pm</option>
  <option value="3pm-4pm">3pm-4pm</option>
  <option value="4pm-5pm">4pm-5pm</option>
  <option value="5pm-6pm">5pm-6pm</option>
</select>   

        <input type="submit" value="Reserve" name="submit" /> 
        <br>
        <br>
        <div>
  <button><a href="slots.php">Available Slots</button>
    </div>
     
    
  </form>
  <br>
  <br>
  <br>
 
</body>

</html>
<?php

function function_alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
}

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
  if(isset($_POST["submit"])){  
    
    if(!empty($_POST['res']))

      {$name=$_POST['fname'];
          $res=$_POST['res'];
          $user=$_POST['user'];  
        $time=$_POST['time'];
        
  
        $query=mysqli_query($con,"SELECT * FROM reservation WHERE ( username1='".$user."' && res_date='".$res."' && Time_slot='".$time."' && status1=0) ");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        $sql="UPDATE reservation
        SET status1=1 where ( username1='".$user."' && res_date='".$res."' && Time_slot='".$time."')" ;
        $sql1="INSERT INTO reserved(res_id,Visitor,User,res_date,Time_Slot) VALUES('','$name','$user','$res','$time')"; 
      
        $result=mysqli_query($con,$sql);
        $result1= mysqli_query($con,$sql1); 
        if($result)
            {  
        echo "Reservation Done";
        } 
        else{
          echo "Failure";
        }
      
        } else {
          
          echo "This Slot is not availabale";
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }  
    ?>  


