<?php
 include('DatabaseConnection.php');
 $db=new DatabaseCon();
 $name=$_GET['name'];
 $phnumber=$_GET['phnumber'];
 $mail=$_GET['mail'];

 $sql="update addContact set Phnumber='$phnumber',Email='$mail' where name='$name'";
 $db->insertQuery($sql);

 echo "<script>alert('success');window.location='AddContact.php';</script>";


?>