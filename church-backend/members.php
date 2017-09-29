
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
        
        <?php include('headers.php')?>
        <br><br>
           <a href="members.php "style="text-decoration:none"> Add Member </a> 
         &nbsp;
         <a href="selectmember.php" style="text-decoration:none"> View Members </a>;
       <form action="insertmember.php" method="POST">
           <br>
           First Name: <input type="text" name="fname"><br><br>
Last Name: <input type="text" name="lname"><br><br>
City:<input type="text" name="city"><br><br>
Address: <input type="text" name="address"><br><br>

Zip Code:<input type="number" name="zipcode"><br><br>
Envelope: <input type="number" name="envelope"><br><br>
State: <select name="state">
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
<input type="Submit">
<input type="Reset" value="Clear">
</form>
           
          
    </body>
   
</html>