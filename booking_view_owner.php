<?php include('owner_header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>

                <h3 align="center" class="style1">booking</h3>
<form action="booking_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="572" border="1" align="center">
    <tr bgcolor="#0000CC">
      <th width="17"><span class="style2">Id</span></th>
      <th width="47"><span class="style2">cust_id</span></th>
      <th width="94"><span class="style2">Tractor_name</span></th>
      <th width="73"><span class="style2">Book_date</span></th>
      <th width="73"><span class="style2">Book_time</span></th>
      <th width="84"><span class="style2">Book_status</span></th>
      <th colspan="2" align="center" bgcolor="#FF0000"><span class="style2">activity</span></th>
    </tr>
     <?php
	require_once('dbcon.php');
	$ss="select * from booking";
	$rs=mysql_query($ss);
	while($row=mysql_fetch_array($rs))
	{
	?>
   
    <tr>
      <td><?php echo $row['Id'];?></td>
      <td><?php echo $row['cust_id'];?></td>
      <td><?php echo $row['Tractor_name'];?></td>
      <td><?php echo $row['Book_date'];?></td>
      <td><?php echo $row['Book_time'];?></td>
      <td><?php echo $row['Book_status'];?></td>
<th width="62"><a href="booking_update1.php?id=<?php echo $row['Id'];?>">update</a></th>
<th width="70"><a href="booking_del.php?id=<?php echo $row['Id'];?>">delete</a></th>
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
<?php include('footer.php');?>				