<?php 
require_once('dbcon.php');
session_start();
$username=$_POST['t1'];
$password=$_POST['t2'];

$_SESSION['t1']=$username;

$ss="select *from  login where username='$username'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);
if(empty($row))
  {
  ?>
  
  <script>
  alert("invalid username");
  document.location="index.html";
  </script>
  <?php
  }
  
  else 
  {
  $pass=$row['password'];
  $utype=$row['utype'];
  
   if($pass==$password)
  {
 
  if($utype=="admin")
  {
  ?>
  <script>
  alert("you have logged in as admin");
  document.location="admin_home.php";
  </script>
  <?php
  }
    
	 if($utype=="customer")
  {
  ?>
  <script>
  alert("you have logged in as customer");
  document.location="customer_home.php";
  </script>
  <?php
  }
 
 
  if($utype=="owner")
  {
  ?>
  <script>
  alert("you have logged in as owner");
  document.location="owner_home.php";
  </script>
  <?php
  }
 
  if($utype=="accountant")
  {
  ?>
  <script>
  alert("you have logged in as accountant");
  document.location="accountant_home.php";
  </script>
  <?php
  }
  }
  else
  {
  ?>
  <script>
  alert("invalid password");
  document.location="index.html";
  </script>
  <?php
  }
  }
  ?>
  
 
	
	
  
  
  
  