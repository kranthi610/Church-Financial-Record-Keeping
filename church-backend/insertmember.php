<?php
header("Refresh:0; url=members.php");
  include('headers.php');
echo"<br><br>";
echo '<br> <br>
         <a href="members.php "style="text-decoration:none"> Add Member </a> 
         &nbsp;
         <a href="selectmember.php" style="text-decoration:none"> View Members </a>';

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

if(!empty($_POST['fname']) and !empty($_POST['lname'])and!empty($_POST['city']) and !empty($_POST['state'])and!empty($_POST['address']) and !empty($_POST['zipcode']) and !empty($_POST['envelope'])  )
{
	$fname=$_POST['fname'];

$lname=$_POST['lname'];
$city=$_POST['city'];
$state=$_POST['state'];
$address=$_POST['address'];
$envelope=$_POST['envelope'];
$zipcode=$_POST['zipcode'];


$sql1="SELECT envelope FROM members WHERE envelope=$envelope";

$result = $conn->query($sql1);

  if ($result->num_rows <=0){

$sql = "INSERT INTO members (firstname, lastname, address,city,state,zipcode,envelope)
        VALUES ('$fname','$lname','$address','$city','$state','$zipcode','$envelope' )";

if ($conn->query($sql) === TRUE) {
    echo "<br>Member Added successfully";
    header("Refresh:2; url=members.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else {
echo '<br>User already exists';
	header("Refresh:2; url=members.php");

}
}
else{

	echo '<br>error in filling form';
	header("Refresh:2; url=members.php");

}
$conn->close(); 


//echo " <br> <a href=select.php> View Results </a>"
?>