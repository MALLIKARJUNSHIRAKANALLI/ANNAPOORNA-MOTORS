<?php
require_once('dbcon.php');
session_start();
$u=$_SESSION['t1'];
$price=$_GET['price'];

$id=$_GET['id'];
$tractor=$_GET['tname'];

$ss="insert into booking values('$id','$u','$tractor',curdate(),curtime(),'$price','pending')";

$rs=mysql_query($ss);

?>
<script>
alert("Thank You For Booking");
document.location="add_tractor_view2.php";
</script>