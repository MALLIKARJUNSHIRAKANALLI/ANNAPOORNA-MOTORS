<?php
$id=$_GET['id'];
echo $id;
require_once('dbcon.php');
$ss="delete from spare_parts_request where Id='$id'";
$rs=mysql_query($ss);
?>
<script>
alert("deleted successfully");
document.location="spare_parts_request_view.php";
</script>