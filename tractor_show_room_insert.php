<?php
require_once('dbcon.php');
$branch_name=$_POST['t1'];
$location=$_POST['t2'];
$show_room_name=$_POST['t3'];
$address=$_POST['t4'];
$office_contact=$_POST['t5'];
$ss="insert into tractor_show_room values('$branch_name','$location','$show_room_name','$address','$office_contact')";
$rs=mysql_query($ss);
if($rs)
{
?>
<script>
alert("inserted");
document.location="admin_home.php";
</script>
<?php
}
else
{
echo"not inserted";
}
?>