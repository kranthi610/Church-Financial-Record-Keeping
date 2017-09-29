<?php

session_start();


header("Refresh:0; url=donations.php");
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "church";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user=$_POST['user'];
$pass=$_POST['pass'];

$sql="SELECT user,pass  FROM login WHERE user='$user' and pass='$pass'";


$result = $conn->query($sql);

   


if ($result->num_rows > 0  ) {
    // output data of each row
    $_SESSION["id"] = $user;
   $row = $result->fetch_assoc(); 
   
        
    }
  
else {
    echo "Wrong credentials";
    header("Refresh:1; url=login.php");
}



if(isset($_SESSION["id"]))
{


header("Refresh:0; url=headers.php");

}



 

$conn->close(); 


?>