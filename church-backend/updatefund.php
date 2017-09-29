
<?php
//session_start();
if(!isset($_SESSION["id"]))
{
header("Refresh:0;url=login.php");
}
?>
<html>




<form action='' method='POST'>
Fund:<input type='number' name='fid'>
 <input type='submit' name ='save' value='update'>
 </form>

</html>
 <?php

if(!empty($_POST['fid']) and isset($_POST['save']))
{
  $del=$_POST['fid'];
$sql = "SELECT  id,fund FROM funds WHERE id=$del";
$result = $conn->query($sql);
if ($result->num_rows > 0) {


$row = $result->fetch_assoc();
$val=$row["fund"];
$value=$row["id"];


echo "<form action='' method='POST'>
           <br>
           Id:<input type='number' name='sid' value='$value'><br><br>
           Fund Name: <input type='text' name='update' value='$val'><br><br>

<input type='Submit' name='final'>
<input type='Reset' >
</form>";

}


else {

	echo 'no such id';
	header("Refresh:2; url=selectfund.php");
}
}
?>

<?php



if(!empty($_POST['update']) and isset($_POST['final'])){

	$val1=$_POST['update'];
	$val3=$_POST['sid'];
	
$val2=strtolower($val1);
	$check= "SELECT  fund FROM funds WHERE LCASE(fund)='$val2'";
$result = $conn->query($check);
if ($result->num_rows > 0) {


echo 'record already exists try a different name';
header("Refresh:2; url=selectfund.php");
}
else{

	
$sql1="UPDATE funds SET fund='$val1' WHERE id='$val3'";  

if ($conn->query($sql1) === TRUE ) {
    echo "<br>Record updated successfully";
    header("Refresh:0; url=selectfund.php");
} else {
    echo "Error deleting record: " ;
}
}
}





?>

