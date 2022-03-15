<?php
require_once('dbcon.php');
$branch=$_POST['t1'];
$tractor_name=$_POST['t2'];
$company=$_POST['t3'];
$color=$_POST['t4'];
$hp=$_POST['t5'];
$rpm=$_POST['t6'];
$power_steering=$_POST['t7'];
$Oil_immersed_disc_breakers=$_POST['t8'];
$air_filters=$_POST['t9'];
$price=$_POST['t10'];
$photo=$_FILES['file']['name'];

move_uploaded_file($_FILES["file"]["tmp_name"],"./upload/" . $_FILES["file"]["name"]);	
	echo "<div class='sucess'>"."Stored in: " ."./upload/" . $_FILES["file"]["name"]."</div>";

$ss="insert into add_tractor(Branch,Tractor_name,Company,color,hp,rpm,Power_steering,Oil_immersed_disc_breakers,Air_filters,Price,photo) values('$branch','$tractor_name','$company','$color','$hp','rpm','power_steering','$Oil_immersed_disc_breakers','$air_filters','$price','$photo')";

$rs=mysql_query($ss);
if($rs)
{
?>
<script>
alert("added successfully");
document.location="add_tractor.php";
</script>
<?php
}
else
{
echo"not inserted";
}
?>	