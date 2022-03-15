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

                <h3 align="center" class="style1">Customer_resgisration</h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="617" border="1" align="center">
    <tr bgcolor="#0000CC">
      <td width="55"><span class="style4">FNAME</span></td>
      <td width="55"><span class="style4">LNAME</span></td>
      <td width="62"><span class="style4">GENDER</span></td>
      <td width="36"><span class="style4">CITY</span></td>
      <td width="70"><span class="style4">ADDRESS</span></td>
      <td width="75"><span class="style4">CONTACT</span></td>
      <td width="48"><span class="style4">EMAIL</span></td>
      <td width="53"><span class="style4">PHOTO</span></td>
      <th width="105" bgcolor="#FF0000"><span class="style4">activity</span></th>
    </tr>
    <?php
    require_once('dbcon.php');
	$ss="select * from customer_reg";
	$rs=mysql_query($ss);
	while($row=mysql_fetch_array($rs))
	{
	?>
    <tr>
      <td><?php echo $row['FNAME'];?></td>
      <td><?php echo $row['LNAME'];?></td>
      <td><?php echo $row['GENDER'];?></td>
      <td><?php echo $row['CITY'];?></td>
      <td><?php echo $row['ADDRESS'];?></td>
      <td><?php echo $row['CONTACT'];?></td>
      <td><?php echo $row['EMAIL'];?></td>
      <td><?php echo $row['PHOTO'];?></td>
     <th><a href="customer_reg_del.php?id=<?php echo $row['EMAIL'];?>">delete</a></th>
    </tr>
    <?PHP
	}
	?>
  </table>
  <div align="justify"></div>
</form>
				