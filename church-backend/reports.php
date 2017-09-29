<?php


 include('headers.php');
   header("Refresh:0;url:report.php");   
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
echo "<br> <br>";


if((empty($_POST['member']) and empty($_POST['fdate']) and empty($_POST['tdate']) ) or ($_POST['fdate']>$_POST['tdate']))
{

echo 'error filling form or from date cant be greater than to date';
header("Refresh:1; url=report.php");
}

else{

$fdate=$_POST['fdate'];
$tdate=$_POST['tdate'];
 $member=$_POST['member'];

if(empty($_POST['member']) and ($fdate<=$tdate))
{

$sql="SELECT  * FROM donations WHERE  cdate BETWEEN '$fdate' AND '$tdate' ";


}



else if(empty($_POST['fdate']) and empty($_POST['tdate']))
  {
   
$sql="SELECT  * FROM donations WHERE member LIKE '%$member%' ";


  }



    else{

$sql="SELECT  * FROM donations WHERE member LIKE '%$member%' AND cdate BETWEEN '$fdate' AND '$tdate' ";

    }



$result = $conn->query($sql);

    echo '<table border="1" style="width:50%"><tr> <th>Envelope</th> 
     <th>Member Name</th>
    <th>Fund Name</th> 
    <th>Amount</th> 
    

   
    </tr>'; 
  


if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo '<tr>';
        echo   '<th>'.$row["envelope"].'</th>'.'<th>'.$row["member"].'</th>'.'<th>'.$row["fund"].'</th>'.'<th>'.$row["amount"].'</th>';
        echo '</tr>';
     
        
        
    }
    
} 
else {
    echo "<tr><td colspan='4'>0 Results</td></tr>";
} 
echo '</table>';

}


$conn->close();

?>