<?php


 include('headers.php');
      echo "<br><br>";   
       echo '<a href="donations.php "style="text-decoration:none"> Create Donation </a> 
         &nbsp;
         <a href="selectdonation.php" style="text-decoration:none"> View Donations </a>';
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

$sql = "SELECT  * FROM donations ";
$result = $conn->query($sql);

    


if ($result->num_rows > 0) {
echo '<table border="1" style="width:50%">
  <tr>
    <th>Id</th> 
    <th>Member</th>
    <th>Envelope</th> 
    <th>Fund Name</th> 
    <th>Amount</th> 
    <th>MoneyType</th> 

    <th>Note</th> 
   
    </tr>';
  
    
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        echo '<tr>';
        echo   '<th>'.$row["id"].'</th>'.'<th>'.$row["member"].'</th>'.'<th>'.$row["envelope"].'</th>'.'<th>'.$row["fund"].'</th>'.'<th>'.$row["amount"].'</th>'.'<th>'.$row["moneytype"].'</th>'.'<th>'.$row["note"].'</th>';





        echo '</tr>';
        
        
    }
    
echo '</table>';
} 
else {
    echo "<br>0 results<br>";

} 
echo '<br>';
include('deletedonation.php');
$conn->close();

?>