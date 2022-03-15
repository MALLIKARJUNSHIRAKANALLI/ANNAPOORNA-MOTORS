<?php include('header.php');?>
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

                <h3 align="center" class="style1">Add spare_parts </h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="682" border="1" align="center">
    <tr bgcolor="#000099">
      <td width="17"><span class="style2">Id</span></td>
      <td width="107"><span class="style2">Company_name</span></td>
      <td width="125"><span class="style2">Sapre_parts_name</span></td>
      <td width="69"><span class="style2">Unit_price</span></td>
      <td width="77"><span class="style2">Description</span></td>
      <td width="37"><span class="style2">photo</span></td>
      <th colspan="2" align="center" bgcolor="#FF0000"><span class="style2">activity</span></th>
    </tr>
    <?php
	require_once('dbcon.php');
	$ss="select * from add_spare_parts";
	$rs=mysql_query($ss);
	while($row=mysql_fetch_array($rs))
	{
	?>
    <tr>
      <td><?php echo $row['Id'];?></td>
      <td><?php echo $row['Company_name'];?></td>
      <td><?php echo $row['spare_parts_name'];?></td>
      <td><?php echo $row['Unit_price'];?></td>
      <td><?php echo $row['Description'];?></td>
      <td><?php echo $row['Photo'];?></td>
    <th width="91"><a href="add_spare_parts_update1.php?id=<?php echo $row['Id'];?>">update</a></th>
     <th width="107"><a href="add_spare_parts_del.php?id=<?php echo $row['Id'];?>">delete</a></th>
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
				