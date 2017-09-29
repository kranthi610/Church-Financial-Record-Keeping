
<?php

echo " <html><form action='' method='POST'>
Member Id:<input type='number' name='id'>
<input type='Submit' name='delete' value='Delete'> </html>";

if(!empty($_POST['id']))
{
  $del=$_POST['id'];

$sql = "SELECT  id FROM donations WHERE id=$del";
$result = $conn->query($sql);
if ($result->num_rows > 0) {


$sql1=" DELETE FROM donations WHERE id=$del  ";





if ($conn->query($sql1) === TRUE ) {
    echo "Record deleted successfully";
    header("Refresh:0; url=selectdonation.php");
} else {
    echo "Error deleting record: " ;
}

}

else {

  echo "no record with such id";
  header("Refresh:2; url=selectdonation.php");

}
}
?>