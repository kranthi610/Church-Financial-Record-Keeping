<?php
//session_start();
if(!isset($_SESSION["id"]))
{
header("Refresh:0;url=login.php");
}
?>


<html>

<form action='' method='POST'>
Member Id:<input type='number' name='muid'>
 <input type='submit' name ='mupdate' value='update'>
 </form>

</html>

 <?php

if(!empty($_POST['muid']) and isset($_POST['mupdate']))
{
  $del=$_POST['muid'];
$sql = "SELECT * FROM members WHERE id=$del";
$result = $conn->query($sql);
if ($result->num_rows > 0) {


$row = $result->fetch_assoc();
$id=$row["id"];
$fname=$row["firstname"];

$lname=$row["lastname"];
$city=$row["city"];
$address=$row["address"];
$zipcode=$row["zipcode"];
$envelope=$row["envelope"];
$state=$row["state"];

echo "<form action='' method='POST'>
           <br>
           Id:<input type='number' name='muid2' value='$id'><br><br>
           
           First Name: <input type='text' name='fname' value='$fname'><br><br>
Last Name: <input type='text' name='lname' value='$lname'><br><br>
City:<input type='text' name='city' value='$city'><br><br>
Address: <input type='text' name='address' value='$address'><br><br>

Zip Code:<input type='number' name='zipcode' value='$zipcode'><br><br>
Envelope: <input type='number' name='envelope' value='$envelope'><br><br>
State: <select name='state' value='$state'>
    <option>Texas</option>
     <option>Alabama </option>
     
<option>Alaska </option>
<option>Arizona </option>
<option>Arkansas </option>
<option>California </option>
<option>Colorado </option>
<option>Connecticut </option>
<option>Delaware </option>
<option>Florida </option>
<option>Georgia </option>
<option>Hawaii </option>
<option>Idaho </option>
<option>Illinois Indiana </option>
<option>Iowa </option>
<option>Kansas </option>
<option>Kentucky </option>
<option>Louisiana </option>

    
</select>
<input type='Submit' name='mfinal'>
<input type='Reset' >

</form>";

}


else {

	echo 'no such id';
	header("Refresh:2; url=selectmember.php");
}
}

?>

<?php



if(!empty($_POST['fname']) and !empty($_POST['lname']) and !empty($_POST['zipcode']) and !empty($_POST['envelope']) and !empty($_POST['state']) and !empty($_POST['address']) and !empty($_POST['city']) and isset($_POST['mfinal'])){

	$val1=$_POST['envelope'];
	$val3=$_POST['muid2'];
	
	$val2=$_POST['fname'];
	$val4=$_POST['lname'];
	$val5=$_POST['city'];
	$val6=$_POST['address'];
	$val7=$_POST['state'];
$val8=$_POST['zipcode'];
	$check= "SELECT  envelope FROM members WHERE envelope=$val1";
$result = $conn->query($check);
if ($result->num_rows > 0) {


echo 'record already exists try a different envelope number';
header("Refresh:1; url=selectmember.php");
}
else{

	
$sql1="UPDATE members SET envelope=$val1, firstname='$val2',lastname='$val4', zipcode='$val8',state='$val7', city='$val5',address='$val6' WHERE id=$val3 ";  

if ($conn->query($sql1) === TRUE ) {
    echo "<br>Record updated successfully";
    header("Refresh:1; url=selectmember.php");
} else {
    echo "Error deleting record: " ;
}
}
}





?>

