<!doctype html>

    <html lang="en">
    <div class="topnav">
    <link rel="stylesheet" href="style.css">
<h1> Reservation System</h1>
<a href="home.php">Home</a>
  <a href="register.php">Register</a>
  <a href="login.php">Login</a>
 

</div>
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>

       <center> <h1 >Available slots</h1><br></center>

       
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
        
      $selected = mysqli_select_db($connector,"user_registration" )
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysqli_query($connector,"SELECT username1, res_date,Time_slot FROM reservation where status1=0");
     
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>User name</th>
          <th>reservation date</th>
          <th>Time slot</th>
    
        
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc($result) ){
            echo
            "<tr>
            <td>{$row['username1']}</td>
              <td>{$row['res_date']}</td>
              <td>{$row['Time_slot']}</td>
              
             
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($connector); ?>
    </body>
    </html>