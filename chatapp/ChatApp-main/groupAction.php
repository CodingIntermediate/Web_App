<?php
include('DatabaseConnection.php');
$db=new DatabaseCon();
session_start();
$dum=$_SESSION['uid'];
$name=$_GET['grpname'];
// $date=$_GET[''];
$descript=$_GET['description'];
$gdate=$_GET['date'];
$sql="insert into groupChat(gname,gdate,descipt,uid) values('$name','$gdate','$descript','$dum')";
$db->insertQuery($sql);

echo"<script>alert('success');window.location='groupChat.php';</script>";


?>