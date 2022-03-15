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

                <h3 align="center" class="style1">Customer_resgisration</h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="910" border="1" align="center">
    <tr>
      <th bgcolor="#0000CC"><span class="style2">FNAME</span></th>
      <th bgcolor="#0000CC"><span class="style2">LNAME</span></th>
      <th bgcolor="#0000CC"><span class="style2">GENDER</span></th>
      <th bgcolor="#0000CC"><span class="style2">CITY</span></th>
      <th bgcolor="#0000CC"><span class="style2">ADDRESS</span></th>
      <th bgcolor="#0000CC"><span class="style2">CONTACT</span></th>
      <td bgcolor="#0000CC"><span class="style2">EMAIL</span></td>
      <th bgcolor="#0000CC"><span class="style2">PHOTO</span></th>
      <th bgcolor="#FF0000"><span class="style2">activity</span></th>
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
<?php include('footer.php');?>
				