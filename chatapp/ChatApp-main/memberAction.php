<?php
  include('DatabaseConnection.php');

  $db=new DatabaseCon();
  session_start();
  $gp=$_SESSION['uid'];

  $mem=$_GET['memb'];

  $sql="insert into groupMember(memberName,gropid) values('$mem','$gp')";

  $db->insertQuery($sql);

  echo"<script>alert('Done');window.location=groupView.php;</script>";

?>