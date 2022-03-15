<?php
require_once('dbcon.php');
$product=$_POST['l1'];
$offer_start=$_POST['t1'];
$offer_end=$_POST['t2'];
$discount=$_POST['t3'];
$ss="insert into exchange_offer values('$product','$offer_start','$offer_end','$discount')";
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