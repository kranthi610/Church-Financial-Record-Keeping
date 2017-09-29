<?php
echo '<a href="members.php "style="text-decoration:none"> Add Fund </a> 
         &nbsp;
         <a href="selectmember.php" style="text-decoration:none"> View Funds </a>';

//header("Refresh:0; url=funds.php");
  include('headers.php');
echo"<br><br>";
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

if(!empty($_POST['fund'])){

	$fund=$_POST['fund'];
	
	$tfund=strtolower($fund);
	
     
$sql="SELECT fund FROM funds WHERE LCASE(fund)='$tfund'";

$result = $conn->query($sql);

  if ($result->num_rows >0){

echo '<br>fund already exists';
	header("Refresh:1; url=funds.php");
}

else{
$sql = "INSERT INTO funds (fund) VALUES ('$fund' )";

if ($conn->query($sql) === TRUE) {
    
    header("Refresh:0; url=funds.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
}
else{

	echo '<br>error in filling form';
	header("Refresh:1; url=funds.php");
}
$conn->close(); 


//echo " <br> <a href=select.php> View Results </a>"
?>