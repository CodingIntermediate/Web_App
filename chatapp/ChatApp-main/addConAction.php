<?php
   include('DatabaseConnection.php');
   $db=new DatabaseCon();

   $name=$_GET['name'];
   $phonenumber=$_GET['phnumber'];
   $email=$_GET['mail'];

   $sql="insert into addContact(Name,Phnumber,Email)values('$name','$phonenumber','$email')";
   $db->insertQuery($sql);
   echo"<script>alert('success');window.location='AddContact.php';</script>";
   
   


?>