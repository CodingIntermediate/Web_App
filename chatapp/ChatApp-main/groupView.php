<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group View</title>
</head>
<body>


    <table border="1">

    <tr>
        <td>Group Name</td>
        <td>Description</td>
        <td>Date</td>
    </tr>
    <?php
    include('DatabaseConnection.php');
    $db=new DatabaseCon();

    $s="select *from groupChat";
    $rs=$db->selectData($s);
    
    while($row=mysqli_fetch_array($rs))
    {
        ?>
    <tr>
         <td><?php echo $row['gname'];?></td>
         <td><?php echo $row['descipt'];?></td>
         <td><?php echo $row['gdate'];?></td>
         <td><a href="addMember.php? eid=<?php echo $row['gropid'] ?>">ADD</a></td>   
    </tr>

    <?php
        }
        ?>
    </table>
</body>
</html>