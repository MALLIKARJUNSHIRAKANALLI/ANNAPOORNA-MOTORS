<?php
require_once('dbcon.php');
$id=$_POST['t1'];
$customer_id=$_POST['t2'];
$spare_parts_name=$_POST['t3'];
$request_date=$_POST['t4'];
$request_time=$_POST['t5'];
$request_status=$_POST['t6'];
$ss="insert into spare_parts_request values('$id','$customer_id','$spare_parts_name','$request_date','$request_time','$request_status')";
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