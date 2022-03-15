<?php
require_once('dbcon.php');
session_start();
$u=$_SESSION['t1'];
$id=$_GET['id'];
$sname=$_GET['sname'];


$ss="insert into spare_parts_request values('$id','$u','$sname',curdate(),curtime(),'pending')";
$rs=mysql_query($ss);
if($rs)
{
?>

<script>
alert("thank your for request");
document.location="customer_home.php";
</script>
<?php
}
?>