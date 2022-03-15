<?php include('customer_header.php');?>
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
.style4 {color: #000000; font-weight: bold; }
-->
</style>

                <h3 align="center" class="style1"> Spare parts Information</h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="638" height="205" align="center">
  <?php
	require_once('dbcon.php');
	$ss="select * from add_spare_parts";
	$rs=mysql_query($ss);
	while($row=mysql_fetch_array($rs))
	{
	?>
    <tr bgcolor="#000099">
      <td width="138"><span class="style2">Company_name</span></td>
      <td width="194"><span class="style2"><?php echo $row['Company_name'];?></span></td>
      <td width="505">&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><span class="style4">Sapre_parts_name</span></td>
      <td><span class="style4"><?php echo $row['spare_parts_name'];?></span></td>
    </tr>
    <tr>
      <td><img src="upload/<?php echo $row['Photo'];?>" width="100px" height="100px" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="spare_part_request.php?id=<?php echo $row['Id'];?>&sname=<?php echo $row['spare_parts_name'];?>"><strong>Send Request</strong></a></td>
      <td><span class="style4">Unit_price</span></td>
      
      <td><?php echo $row['Unit_price'];?></td>
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
				