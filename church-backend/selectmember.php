<?php


 include('headers.php');
       
      echo '<br> <br>
         <a href="members.php "style="text-decoration:none"> Add Member </a> 
         &nbsp;
         <a href="selectmember.php" style="text-decoration:none"> View Members </a><br><br>';

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

$sql = "SELECT  * FROM members  ";
$result = $conn->query($sql);

    
  
if ($result->num_rows > 0) {
    // output data of each row
    echo '<table border="1" style="width:50%">
  <tr>
  <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Address</th>
    <th>City</th>
    <th>State</th> 
    <th>Zipcode</th>
    <th>Envelope</th>
    
  </tr>';
    while($row = $result->fetch_assoc()) {
        
        echo '<tr>';
        echo   '<th>'.$row["id"].'</th>'.'<th>'.$row["firstname"].'</th>'.'<th>'.$row["lastname"].'</th>'.'<th>'.$row["address"].'</th>'.'<th>'.$row["city"].'</th>'.'<th>'.$row["state"].'</th>'.'<th>'.$row["zipcode"].'</th>'.'<th>'.$row["envelope"].'</th>';
    
        echo '</tr>';
        
    }
    echo '</table>';
} 
else {
    echo "<br>0 results";

}
echo '<br>';
include('deletemember.php');
include('updatemember.php');

$conn->close();

?>

