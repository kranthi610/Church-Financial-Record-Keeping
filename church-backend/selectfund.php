<?php


 include('headers.php');
      echo "<br><br>";   
       echo '<a href="funds.php "style="text-decoration:none"> Add Fund </a> 
         &nbsp;
         <a href="selectfund.php" style="text-decoration:none"> View Funds </a>';
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

$sql = "SELECT  * FROM funds ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table border="1" style="width:50%">
  <tr>

    <th>Id</th>  
    
    <th>Funds</th>  </tr>';
    while($row = $result->fetch_assoc()) {
        
        echo '<tr>';
        echo   '<th>'.$row["id"].'</th>'.'<th>'.$row["fund"].'</th>';

        echo '</tr>';
        
        
    }
    echo '</table>';
} 
else {
    echo "<br>0 results<br>";
} 

include('deletefund.php');
include('updatefund.php');




$conn->close();

?>