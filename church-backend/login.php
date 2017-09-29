<?php

session_start();

if(!isset($_SESSION["id"]))
{

    echo '<br><br><br><br><p style="color:red;" align="center"><b>Admin Login<b></p><br><br> ';

echo '<form align="center" action="loginaction.php" method="POST">
username:<input type="text" name="user"><br><br>
password:<input type="password" name="pass"><br><br>
<input type="submit" name="sub">

</form>';

echo ' <img  src="clogo.jpg" title="church" align="right" alt ="Church Finacial Record Keeping" >';

}

else

{


	header("Refresh:2; url=headers.php");
		echo 'you are already logged in';
}
 

?>
