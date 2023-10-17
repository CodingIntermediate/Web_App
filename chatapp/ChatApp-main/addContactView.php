<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact view</title>
</head>
<body>
     
 <table border="1">
    <tr>
        <td>Name</td>
        <td>Phone-Number</td>
        <td>E-mail</td>
    </tr>
   <?php

       include('DatabaseConnection.php');
       $db=new DatabaseCon();
       $s="select *from  addContact";
       $rs=$db->selectData($s);

       while($row=mysqli_fetch_array($rs))
       {?>
        <tr>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Phnumber'];?></td>
        <td><?php echo $row['Email'];?></td>

        <td><a href="deleteContactView.php?eid=<?php echo $row['id']?>">Delete</a></td>
        <td><a href="addContactUpdate.php?sid=<?php echo $row['id']?>">Update</a></td>
    </tr>
<?php
       }
       ?>

 </table>
    
</body>
</html>