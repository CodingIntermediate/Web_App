<?php
include('DatabaseConnection.php');
$db=new DatabaseCon();
session_start();
    echo $uid=$_SESSION['uid'];  
   $did=$_GET['did'];
   $msg=$_GET['msg'];
   $cd=Date('Y-m-d');

$s="select * from chatm where uid=$uid and did=$did and chat_date='$cd'";
$rs=$db->selectQuery($s);
if($rs==1){
	$ss="select max(chat_id) as chat_id from chatm";
$rss=$db->selectData($ss);
$row=mysqli_fetch_array($rss);
$chid=$row['chat_id'];
$sql="insert into chats (chat_id,msg,typ) values ('$chid','$msg',$uid)";
$db->insertQuery($sql);
}
else{
	$sql="insert into chatm (did,chat_date,uid) values ('$did','$cd','$uid')";
$db->insertQuery($sql);
$ss="select max(chat_id) as chat_id from chatm";
$rss=$db->selectData($ss);
$row=mysqli_fetch_array($rss);
$chid=$row['chat_id'];
$sql="insert into chats (chat_id,msg,typ) values ('$chid','$msg',$uid)";
$db->insertQuery($sql);	
}
echo"<script>window.location='chat.php?id=$did';</script>";
?>