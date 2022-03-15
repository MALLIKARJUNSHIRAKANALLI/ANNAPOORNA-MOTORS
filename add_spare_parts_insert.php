<?php
require_once('dbcon.php');
$id=$_POST['t1'];
$company_name=$_POST['t2'];
$spare_parts_name=$_POST['t3'];
$unit_price=$_POST['t4'];
$description=$_POST['t5'];
$photo=$_FILES['file']['name'];
$ss="insert into add_spare_parts values('$id','$company_name','$spare_parts_name','$unit_price','$description','$photo')";
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