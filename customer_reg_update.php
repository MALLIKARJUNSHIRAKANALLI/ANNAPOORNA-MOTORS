<?php

if(empty($_FILES['file']['name']))
{

require_once('dbcon.php');
$fname=$_POST['t1'];
$lname=$_POST['t2'];
$gender=$_POST['t3'];
$city=$_POST['t4'];
$address=$_POST['t5'];
$contact=$_POST['t6'];
$email=$_POST['t7'];


	
$ss="update customer_reg set FNAME='$fname',LNAME='$lname',GENDER='$gender',CITY='$city',ADDRESS='$address',CONTACT='$contact' where EMAIL='$email'";
$rs=mysql_query($ss);
}
else
{
$fname=$_POST['t1'];
$lname=$_POST['t2'];
$gender=$_POST['t3'];
$city=$_POST['t4'];
$address=$_POST['t5'];
$contact=$_POST['t6'];
$email=$_POST['t7'];
$photo=$_FILES['file']['name'];

	move_uploaded_file($_FILES["file"]["tmp_name"],"./upload/".$_FILES["file"]["name"]);	
	echo "<div class='sucess'>"."Stored in: " ."./upload/".$_FILES["file"]["name"]."</div>";
	
$ss="update customer_reg set FNAME='$fname',LNAME='$lname',GENDER='$gender',CITY='$city',ADDRESS='$address',CONTACT='$contact',PHOTO='$photo' where EMAIL='$email'";
$rs=mysql_query($ss);

}

?>

<script>
alert("updated successfully");
document.location="customer_home.php";
</script>