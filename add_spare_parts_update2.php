<?php
require_once('dbcon.php');
$id=$_POST['t1'];
$company_name=$_POST['t2'];
$spare_parts_name=$_POST['t3'];
$unit_price=$_POST['t4'];
$description=$_POST['t5'];
$photo=$_FILES['file']['name'];
$ss="update add_spare_parts set Id='$id',Company_name='$company_name',spare_parts_name='$spare_parts_name',
Unit_price='$unit_price',description='$description',photo='$photo' where Id='$id'";
$rs=mysql_query($ss);
if($ss)
{
?>
<script>
alert("updated successfully");
document.location="add_spare_parts_view.php";
</script>
<?php
}
else
{
echo mysql_error();
}
?>