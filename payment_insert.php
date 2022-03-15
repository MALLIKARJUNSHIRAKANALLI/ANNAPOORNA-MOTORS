<?php
require_once('dbcon.php');
$id=$_POST['t1'];
$customer_id=$_POST['t2'];
$payment_date=$_POST['t3'];
$total_cost=$_POST['t4'];
$advance_payment=$_POST['t5'];
$remaining=$_POST['t6'];
$ss="insert into payment values('$id','$customer_id','$payment_date','$total_cost','$advance_payment','$remaining')";
$rs=mysql_query($ss);
if($rs)
{
echo"inserted";
}
else
{
echo"not inserted";
}
?>