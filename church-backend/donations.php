
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        
        <?php include('headers.php')?>
        <br><br>
           <a href="donations.php "style="text-decoration:none"> Create Donation</a> 
         &nbsp;
         <a href="selectdonation.php" style="text-decoration:none"> View Donations </a>;
       <form action="insertdonation.php" method="POST">
           <br> 
           <input type="date" name="cdate"><br>
           Envelope: 
           
           <?php include('donationenvelopedatabase.php'); 
           ?>
           <br><br>
Fund: <?php include('donationfunddatabase.php'); 
           ?><br><br>
           Money Type:<select name="moneytype">
               <option>Cash</option>
               <option>Check</option>
               <option>MoneyOrder</option>
           </select>
Amount: <input type="number" step="0.01" min="0" name="amount"><br><br>


Note: <textarea  name="note"></textarea><br>
<input type="Submit">
<input type="Reset" value="Clear">
</form>
           
          
    </body>
  
</html>