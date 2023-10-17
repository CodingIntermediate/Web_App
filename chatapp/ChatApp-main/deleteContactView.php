<?php
include('DatabaseConnection.php');
$db=new DatabaseCon();
$id=$_GET['eid'];
$sql="delete from addContact where id='$id' ";
$db->insertQuery($sql);
echo"<script>alert('deleted');window.location='AddContact.php';</script>";
?>