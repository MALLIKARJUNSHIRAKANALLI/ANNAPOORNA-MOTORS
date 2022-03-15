<?php
$id=$_GET['id'];
echo $id;
require_once('dbcon.php');
$ss="delete from exchange_offer where Product='$id'";
$rs=mysql_query($ss);

?>
<script>
alert("deleted successfully");
document.location="exchange_offer_view.php";
</script>