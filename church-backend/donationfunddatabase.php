<?php


//session_start();
if(!isset($_SESSION["id"]))
{
header("Refresh:0;url=login.php");
}
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


$sql="SELECT  fund FROM funds ";

$result = $conn->query($sql);
echo '<select name="fund">';
if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
       
        echo   '<option>'.$row["fund"].'</option>';
        
    }
    
} 
else {
    echo "0 results";
} echo '</select>';




$conn->close();
           ?>