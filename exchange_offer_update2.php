<?php
require_once('dbcon.php');
$product=$_POST['l1'];
$offer_start=$_POST['t1'];
$offer_end=$_POST['t2'];
$discount=$_POST['t3'];
$ss="update exchange_offer set Product='$product',Offer_start='$offer_start',
Offer_end ='$offer_end',Discount='$discount'";
$rs=mysql_query($ss);
if($rs)
{
?>
<script>
alert("updated successfully");
document.location="exchange_offer_view.php";
</script>
<?php
}
else
{
echo mysql_error();
}
?>