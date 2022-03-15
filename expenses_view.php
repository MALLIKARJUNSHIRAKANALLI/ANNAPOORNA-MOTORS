<?php include('accountant_header.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div align="center" class="style1">EXPENSES</div>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr bgcolor="#0000CC">
      <td><span class="style2">expenses_name</span></td>
      <td><span class="style2">expenses_type</span></td>
      <td><span class="style2">expenses_date</span></td>
      <td><span class="style2">expenses_amount</span></td>
    </tr>
    <?php
	require_once('dbcon.php');
	$ss="select * from expenses";
	$rs=mysql_query($ss);
	while($row=mysql_fetch_array($rs))
	{
	?>
    <tr>
      <td><?php echo $row['expenses_name'];?></td>
      <td><?php echo $row['expenses_type'];?></td>
      <td><?php echo $row['expenses_date'];?></td>
      <td><?php echo $row['expenses_amount'];?></td>
    </tr>
    <?php
	}
	?>
  </table>
</form>
</body>

</html>
