<?php
include('DatabaseConnection.php');
$db=new DatabaseCon();
session_start();
$uname=$_GET['uname'];
$pass=$_GET['pass'];

$sql="select * from login where uname='$uname' and upass='$pass'";
$rt=$db->selectQuery($sql);
 if($rt==1)
 {
    $rs=$db->selectData($sql);
    $row=mysqli_fetch_array($rs);
    $utype=$row['utype'];
    $_SESSION['uid']=$row['uid'];
     if($utype=="admin")
     {
        echo"<script>alert('Welcome admin');window.location='adminHome.php';</script>";
     }
     else if($utype=="user")
	 {
 echo "<script>alert('Welcome user');window.location='userHome.php';</script>";
	 }
 }
 else
 {
    echo"<script>alert('failed');window.location='index.php';</script>";
 }
 ?>