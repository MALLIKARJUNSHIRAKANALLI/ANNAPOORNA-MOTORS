<?php
$id=$_GET['id'];
echo $id;
require_once('dbcon.php');

$ss="delete from booking where Id='$id'";
$rs=mysql_query($ss);

?>
<script>
alert("deleted successfully");
document.location="booking_view.php";
</script>