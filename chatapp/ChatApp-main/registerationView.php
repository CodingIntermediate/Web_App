<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration View</title>
</head>
<body>
     
 <table border="1">
    <tr>
          <td>Name</td>
        <td>Nickname</td>
        
        <td>Phone-Number</td>
        <td>Account Type</td>
    </tr>
   <?php

       include('DatabaseConnection.php');
       $db=new DatabaseCon() ;
       $s="select *from register";
       $rs=$db->selectData($s);

       while($row=mysqli_fetch_array($rs))
       {?>
        <tr>
        <td><?php echo $row['Name'];?></td>  
        <td><?php echo $row['Nickname'];?></td>
        <td><?php echo $row['Phonenumber']?></td>
        <td><?php echo $row['Account_type'];?></td>

        <td><a href="deleteForRegisteration.php?eid=<?php echo $row['uid'];?>">Delete</a></td>
     </tr>
     <?php
       }?>

 </table>
    
</body>
</html>