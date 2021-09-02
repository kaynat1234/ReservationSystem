<?php
include ('header.html');
session_start();
$uname=$_SESSION['login_user'];

?>
<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
        
      $selected = mysqli_select_db($connector,"user_registration" )
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysqli_query($connector,"SELECT * FROM reserved where User='{$uname}'");
     
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Visitor</th>
          <th>Reservation date</th>
          <th>Time slot</th>
        
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc($result) ){
            echo
            "<tr>
              <td>{$row['Visitor']}</td>
              <td>{$row['res_date']}</td>
              <td>{$row['Time_Slot']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($connector); ?>
     <center>
     <button><a href="member.php"> Back</button>
     <center>
    </body>
    </html>
