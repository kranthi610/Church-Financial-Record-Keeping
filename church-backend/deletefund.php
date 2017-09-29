<?php 



//session_start();
if(!isset($_SESSION["id"]))
{
header("Refresh:0;url=login.php");
}


echo "<form action='' method='POST'>
Fund Id:<input type='number' name='uid'>
 <input type='submit' name ='delete' value='delete'> ";
if(!empty($_POST['uid']) and isset($_POST['delete']) )
{
  $delete=$_POST['uid'];
$sql = "SELECT  id FROM funds WHERE id=$delete";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$sql1=" DELETE FROM funds WHERE id=$delete  ";
if ($conn->query($sql1) === TRUE ) {
    echo "Record deleted successfully";
    header("Refresh:2; url=selectfund.php");
} else {
    echo "Error deleting record: " ;
}
}
else {
echo "no record with such id";
  header("Refresh:2; url=selectfund.php");
}
}
?>