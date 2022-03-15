<?php
$id=$_GET['id'];
echo $id;
require_once('dbcon.php');

$ss="delete from customer_reg where EMAIL='$id'";
$rs=mysql_query($ss);

?>
<script>
alert("deleted successfully");
document.location="customer_reg_view.php";
</script>