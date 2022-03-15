<?php include('admin_header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style5 {color: #FFFFFF; font-weight: bold; }
-->
</style>

                <h3 align="center" class="style1">Spare_parts_request</h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="591" border="1" align="center">
    <tr bgcolor="#0000CC">
      <td width="17"><span class="style5">Id</span></td>
      <td width="47"><span class="style5">Cust_id</span></td>
      <td width="114"><span class="style5">Sapre_parts_name</span></td>
      <td width="83"><span class="style5">Request_date</span></td>
      <td width="82"><span class="style5">Request_time</span></td>
      <td width="91"><span class="style5">Request_status</span></td>
      <th width="111" bgcolor="#FF0000"><span class="style5">activity</span></th>
    </tr>
    <?php
	require_once('dbcon.php');
	$ss="select * from spare_parts_request";
	$rs=mysql_query($ss);
	while($row=mysql_fetch_array($rs))
	{
	?>
    <tr>
      <td><?php echo $row['Id'];?></td>
      <td><?php echo $row['Cust_id'];?></td>
      <td><?php echo $row['Spare_partes_neme'];?></td>
      <td><?php echo $row['Request_date'];?></td>
      <td><?php echo $row['Request_time'];?></td>
      <td><?php echo $row['Request_status'];?></td>
     <?php
	  $status=$row['Request_status'];
	  if($status=='confirmed')
	  {
	  ?>
<th width="62">confirmed</th>
<?php
}
else
{
?>
<th width="62"><a href="booking_update2confirm.php?id=<?php echo $row['Id'];?>">click to confirm</a></th>
<?php
}
?>
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
				<?php include('footer.php');?>