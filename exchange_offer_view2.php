<?php include('customer_header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style4 {color: #FFFFFF; font-weight: bold; }
-->
</style>

                <h3 align="center" class="style1">Exchange Offer</h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="903" border="1" align="center">
    <tr bgcolor="#0000CC">
      <th width="47" height="35"><span class="style4">product</span></th>
      <th width="62"><span class="style4">offer_start</span></th>
      <th width="58"><span class="style4">offer_end</span></th>
      <th width="50"><span class="style4">discount</span></th>
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
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
				