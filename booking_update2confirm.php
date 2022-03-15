<?php
require_once('dbcon.php');
$id=$_GET['id'];
$ss="update booking  set Book_status='confirmed' where Id='$id'";
$rs=mysql_query($ss);
if($ss)
{
?>
<script>
alert("confirmed sent successfully");
document.location="booking_viewctradmin.php";
</script>
<?php
}
else
{
echo mysql_error();
}
?>