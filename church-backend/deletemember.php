<?php
//session_start();
if(!isset($_SESSION["id"]))
{
header("Refresh:0;url=login.php");
}
echo " <form action='' method='POST'>
MemberId:<input type='number' name='mid'>
 <input type='Submit' name='mdelete' >  </form>";
if(!empty($_POST['mid']) and isset($_POST['mdelete']))
{
  $del=$_POST['mid'];
$sql = "SELECT  id FROM members WHERE id=$del";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$sql1=" DELETE FROM members WHERE id=$del  ";
if ($conn->query($sql1) === TRUE ) {
    echo "Record deleted successfully";
    header("Refresh:0; url=selectmember.php");
} else {
    echo "Error deleting record: " ;
}
}
else {
  echo "no record with such id";
  header("Refresh:2; url=selectmember.php");
}
}
?>