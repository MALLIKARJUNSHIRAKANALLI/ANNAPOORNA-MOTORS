<?php
require_once('dbcon.php');
$id=$_POST['t1'];
$customer_id=$_POST['t2'];
$tractor_name=$_POST['t3'];
$book_date=$_POST['t4'];
$book_time=$_POST['t5'];
$book_status=$_POST['t6'];
$ss="insert into booking values('$id','$customer_id','$tractor_name','$book_date','$book_time','$book_status')";
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