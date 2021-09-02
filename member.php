
<?php
session_start();
$uname=$_SESSION['login_user'];

?>
<html>
  <style>
    form{
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 250px;  
    margin-left: 250px; 
}
    </style>
<div class="topnav">
    <link rel="stylesheet" href="style.css">
<h1> Reservation System</h1>
 <a class="active" href="#home">Home</a>
 <a href="reserve.php">Your Bookings</a>
 <a href="logout.php">Logout</a>
</div>
 <br>
 <br>
 <center>
  <div >
  <h1>Set you Availability Slots</h1>
   
  <form action="" method="POST" style="width:500; display:inline!important; margin: 0; padding: 0;" >  
  
  <legend>  
    <fieldset>

  
  
   
<label>Username</label> <input type="text" name='user' value=<?php echo $uname?> /><br>  <br>
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
<br>
<br>
     <input type="submit" value="submit" name="submit" />  
</legend>  
</fieldset>
</form>  


   <div>
</center>
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
  if(isset($_POST["submit"])){  
    if(!empty($_POST['user']) && !empty($_POST['res']) && !empty($_POST['time'])) {  
        $user=$_POST['user'];  
        $res=$_POST['res'];  
        $time=$_POST['time'];
       
        
      
        $query=mysqli_query($con,"SELECT * FROM reservation WHERE (username1='".$user."' && res_date='".$res."' && Time_slot='".$time."')");  
        $numrows=mysqli_num_rows($query);  
        if($numrows==0)  
        {  
        $sql="INSERT INTO reservation(res_id,username1,res_date,Time_slot,status1) VALUES('','$user','$res','$time','0')";  
      
        $result=mysqli_query($con,$sql);  
            if($result){  
        echo "Done";  
        } 
        else{
          echo"Failure";
        }
      
        } else {  
        echo "Already Done";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }  
    ?>  

