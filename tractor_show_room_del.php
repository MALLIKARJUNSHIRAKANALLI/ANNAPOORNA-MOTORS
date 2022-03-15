<?php
$id=$_GET['id'];
echo $id;
require_once('dbcon.php');
$ss="delete from tractor_show_room where BRANCH_NAME='$id'";
$rs=mysql_query($ss);

?>
<script>
alert("deleted successfully");
document.location="tractor_show_room_view.php";
</script>