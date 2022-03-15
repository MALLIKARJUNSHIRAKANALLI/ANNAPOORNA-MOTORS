<?php
require_once('dbcon.php');
session_start();
$User_Name=$_SESSION['t1'];
$Current_Password=$_POST['t2'];
$New_Password=$_POST['t3'];
$Confirm_Password=$_POST['t4'];

$ss="select * from login where username='$User_Name' and password='$Current_Password'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);

if(empty($row))
{
?>
<script>
alert("Invalid Username Or Current Password");
document.location="changepassword.php";
</script>
<?php
}
else
{

  if($New_Password==$Confirm_Password)
  {
  
      $ss1="update login set password='$New_Password' where username='$User_Name'";
	  mysql_query($ss1);
	  ?>
      <script>
alert("Password has been changed successfully");
document.location="login.php";
</script>
      <?php
  }
  
  else
  {
  
?>

    <script>
alert("NewPass and ConfirmPass must be same");
document.location="changepassword.php";
</script>
      <?php
	  
}	  

}
?>