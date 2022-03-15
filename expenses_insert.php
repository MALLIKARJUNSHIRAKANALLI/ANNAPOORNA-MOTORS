<?php 
require_once('dbcon.php');
$expenses_name=$_POST['t1'];
$expenses_type=$_POST['t2'];
$expenses_date=$_POST['t3'];
$expenses_amount=$_POST['t4'];
$ss="insert into expenses values('$expenses_name','$expenses_type','$expenses_date','$expenses_amount')";
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