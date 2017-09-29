
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        
        <?php include('headers.php')?><br><br>
         <a href="funds.php "style="text-decoration:none"> Add Fund </a> 
         &nbsp;
         <a href="selectfund.php" style="text-decoration:none"> View Funds </a>

       <form action="insertfund.php" method="POST">
           <br>
           Fund Name: <input type="text" name="fund"><br><br>

<input type="Submit">
<input type="Reset" value="Clear">
</form>
           
          
    </body>
   
</html>
