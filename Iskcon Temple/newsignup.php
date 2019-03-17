<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $email = $_POST["email"];
 $Name = $_POST["Name"];
 $Phone_Number = $_POST["phone_number"];
 $gender = $_POST["gender"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iskcon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $sql_u = "SELECT * FROM user WHERE Name='$Name'";
  $sql_e = "SELECT * FROM user WHERE email='$email'";
  $res_u = mysqli_query($conn, $sql_u);
  $res_e = mysqli_query($conn, $sql_e);

  if(mysqli_num_rows($res_e) > 0){
    echo "<h2 style='color:red;'> Sorry... email already taken. Please try again.</h2>";
    echo '<form  action="signupp.html" method="get">';
    echo '<input type="submit" value="Fill FormAgain" >';
    echo '</form>';
  }else{
         $query = "INSERT INTO online booking (email,Username,phoneno,gender)
              VALUES ('$email','$Name','$Phone_Number','$gender')";
              if ($conn->query($query) === TRUE) {
         echo "<h2 style='color:green;'>You registered successfully.</h2>";
         echo "<p>Do you want to another booking.</p>";
         echo '<form  action="signupp.html" method="get">';
         echo '<input type="submit" value="Register New User" >';
         echo '</form>' ;
         echo '<form  action="login.php" method="get">';
         echo '<input type="submit" value="login" >';
         echo '</form>';
     } else {
         echo "Error: " . $query . "<br>" . $conn->error;
     }
  }

$conn->close();
}

?>
