<?php include('admin_header.php');?>
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

                <h3 align="center" class="style1">Exchange Offer</h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="414" border="1" align="center">
    <tr bgcolor="#0000CC">
      <td width="50"><span class="style2">product</span></td>
      <td width="71"><span class="style2">offer_start</span></td>
      <td width="64"><span class="style2">offer_end</span></td>
      <td width="55"><span class="style2">discount</span></td>
      <td colspan="2" align="center" bgcolor="#FF0000"><span class="style2">activity</span></td>
    </tr>
    <?php
	require_once('dbcon.php');
	$ss="select * from exchange_offer";
	$rs=mysql_query($ss);
    while($row=mysql_fetch_array($rs))
	{
	?>
   <tr>
      <td><?php echo $row['Product'];?></td>
      <td><?php echo $row['Offer_start'];?></td>
      <td><?php echo $row['Offer_end'];?></td>
      <td><?php echo $row['Discount'];?></td>
      <th width="60"><a href="exchange_offer_update1.php?id=<?php echo $row['Product'];?>">update</a></th>
     <th width="74"><a href="exchange_offer_del.php?id=<?php echo $row['Product'];?>">delete</a></th>
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
<?php include('footer.php');?>				