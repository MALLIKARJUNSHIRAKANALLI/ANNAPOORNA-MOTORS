<?php 
require_once('dbcon.php');
$branch=$_POST['t1'];
$tractor_name=$_POST['t2'];
$company=$_POST['t3'];
$color=$_POST['t7'];
$hp=$_POST['t4'];
$rpm=$_POST['t5'];
$power_steering=$_POST['t6'];
$Oil_immersed_disc_breakers=$_POST['t8'];
$air_filters=$_POST['t9'];
$price=$_POST['t10'];
$photo=$_FILES['file']['name'];
$id=$_POST['id'];

$ss="update add_tractor set Branch='$branch',Tractor_name ='$tractor_name',Company='$company',
color ='$color',hp='$hp',rpm='$rpm',Power_steering='$power_steering',Oil_immersed_disc_breakers='$Oil_immersed_disc_breakers',Air_filters='$air_filters',Price='$price',photo='$photo' where id='$id'";
$rs=mysql_query($ss);

echo $ss;
if($ss)
{
?>
<script>
alert("updated successfully");
document.location="add_tractor_view.php";
</script>
<?php
}
else
{
echo mysql_error();
}
?>