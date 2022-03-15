<?php
$id=$_GET['id'];
echo $id;
require_once('dbcon.php');

$ss="delete from add_tractor where id='$id'";
$rs=mysql_query($ss);

?>
<script>
alert("deleted successfully");
document.location="add_tractor_view.php";
</script>