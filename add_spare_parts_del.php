<?php
$id=$_GET['id'];
echo $id;
require_once('dbcon.php');
$ss="delete from add_spare_parts where Id='$id'";
$rs=mysql_query($ss);

?>
<script>
alert("deleted successfully");
document.location="add_spare_parts_view.php";
</script>