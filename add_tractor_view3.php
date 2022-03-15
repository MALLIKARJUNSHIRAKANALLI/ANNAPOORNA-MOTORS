<?php include('owner_header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style4 {color: #FFFFFF; font-weight: bold; }
-->
</style>

                <h3 align="center" class="style1">Add_tractor </h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="864" border="1" align="center">
    <tr bgcolor="#0000CC">
      <td width="48"><span class="style4">Branch</span></td>
      <td width="94"><span class="style4">Tractor_name</span></td>
      <td width="63"><span class="style4">Company</span></td>
      <td width="33"><span class="style4">color</span></td>
      <td width="17"><span class="style4">hp</span></td>
      <td width="26"><span class="style4">rpm</span></td>
      <td width="103"><span class="style4">Power_steering</span></td>
      <td width="195"><span class="style4">Oil_immerced_disc_breakers</span></td>
      <td width="68"><span class="style4">Air_filters</span></td>
      <td width="34"><span class="style4">Price</span></td>
      <td width="29"><span class="style4">poto</span></td>
      <th width="78" bgcolor="#FF0000"><span class="style4">activity</span></th>
    </tr>
    <?php
    require_once('dbcon.php');
	$ss="select * from add_tractor";
	$rs=mysql_query($ss);
	while($row=mysql_fetch_array($rs))
	{
	?>
    <tr>
      <td><?php echo $row['Branch'];?></td>
      <td><?php echo $row['Tractor_name'];?></td>
      <td><?php echo $row['Company'];?></td>
      <td><?php echo $row['color'];?></td>
      <td><?php echo $row['hp'];?></td>
      <td><?php echo $row['rpm'];?></td>
      <td><?php echo $row['Power_steering'];?></td>
      <td><?php echo $row['Oil_immersed_disc_breakers'];?></td>
      <td><?php echo $row['Air_filters'];?></td>
      <td><?php echo $row['Price'];?></td>
      <td><?php echo $row['photo'];?></td>
     <th><a href="add_tractor_del.php?id=<?php echo $row['id'];?>">delete</a></th>
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
				