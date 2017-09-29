<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(!isset($_SESSION["id"]))
{


header("Refresh:0; url=login.php");

}

else{

echo '<a href="members.php" style="text-decoration:none"> Member </a> |
        <a href="funds.php" style="text-decoration:none"> Fund </a> |
        <a href="donations.php" style="text-decoration:none"> Donation </a> |
        <a href="report.php"style="text-decoration:none"> Report </a> | <a style="text-decoration:none" align="right" href="logout.php" >Logout </a> ';

        echo '<h4 align="right" style="color:green";>'.$_SESSION["id"].'</h4>' ;


    

}

?>
         