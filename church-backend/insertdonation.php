<?php
header("Refresh:0; url=donations.php");
  include('headers.php');
echo"<br><br>";
echo '<br> <br>
         <a href="donations.php "style="text-decoration:none"> Add Donation </a> 
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

$member='';
if(!empty($_POST['cdate']) and !empty($_POST['envelope'])and!empty($_POST['fund']) and !empty($_POST['moneytype'])and!empty($_POST['amount'])  and (date("Y-m-d")>=$_POST['cdate'] ))
{
$cdate=$_POST['cdate'];
$envelope=$_POST['envelope'];
$fund=$_POST['fund'];
$moneytype=$_POST['moneytype'];
$amount=$_POST['amount'];
$note=$_POST['note'];


$sql1="SELECT CONCAT(firstname,' ',lastname) as member FROM members where envelope=$envelope";
$result = $conn->query($sql1);

   


if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        $member=$member.$row['member'];
        
        
    }
   
} 
else {
    echo "<br>0 results";
}




// sql to create table
$sql = "INSERT INTO donations (amount,moneytype,note,cdate,member,envelope,fund)
       VALUES ('$amount','$moneytype','$note','$cdate','$member','$envelope','$fund' )";


if ($conn->query($sql) === TRUE) {
    echo "<br>Donation Added successfully";
    header("Refresh:1; url=donations.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

else

{

    echo '<br>error in filling form';
    header("Refresh:2; url=donations.php");
}

 

$conn->close(); 


?>