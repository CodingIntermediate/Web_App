<?php

  include('DatabaseConnection.php');
  $db=new DatabaseCon();
  $tid=$_GET['eid'];
  $sql="delete from register where uid='$tid'";
$db->insertQuery($sql);
echo"<script>alert('Deleted');window.location='registerationView.php';</script>";

?>