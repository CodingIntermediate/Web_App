<?php
  include('DatabaseConnection.php');
  $db=new DatabaseCon();
  $name=$_GET['name1'];
  $nickname=$_GET['nick1'];
  $phoneNumber=$_GET['phnum'];
  $account_ty=$_GET['accounts'];
  $pass=$_GET['pass'];
  $em=$_GET['email'];
  $sql="insert into register(Name,Nickname,Phonenumber,Account_type,email)values('$name','$nickname','$phoneNumber','$account_ty','$em')";
  $db->insertQuery($sql);
$sql1="select max(uid) as uid from register";
$rs=$db->selectData($sql1);
$row=mysqli_fetch_array($rs);
$uid=$row['uid'];
$sql2="insert into login(uid,uname,upass,utype)values('$uid','$em','$pass','user')";
$db->insertQuery($sql2);
echo"<script>alert('success');window.location='registeration.php'</script>";
?>
 