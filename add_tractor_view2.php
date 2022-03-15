<?php include('customer_header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style4 {color: #FFFFFF; font-weight: bold; }
.style6 {color: #000000; font-weight: bold; }
.style7 {color: #000000}
.style8 {color: #FFFFFF}
.style9 {color: #FF0000}
-->
</style>

                <h3 align="center" class="style1">Tractor Information</h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="1271" height="235" align="center">
    <?php
    require_once('dbcon.php');
	$ss="select * from add_tractor";
	$rs=mysql_query($ss);
	while($row=mysql_fetch_array($rs))
	{
	?>
    <tr bgcolor="#0000CC">
      <td width="157" height="22"><span class="style4">Tractor_name</span></td>
      <td width="139"><span class="style8"><?php echo $row['Tractor_name'];?></span></td>
      <td width="86"><span class="style8"></span></td>
      <td width="180"><span class="style8"></span></td>
      <td width="132"><span class="style8"></span></td>
      <td width="116"><span class="style8"></span></td>
      <td width="244"><span class="style8"></span></td>
      <td width="181"><span class="style8"></span></td>
    </tr>
  
    
    <tr>
      <td height="117"><div align="center"><img src="upload/<?php echo $row['photo'];?>" width="100" height="100" /></div></td>
      <td><span class="style7"></span></td>
      <td><span class="style6 style7">Company</span></td>
      <td><span class="style7 style7"><?php echo $row['Company'];?></span></td>
      <td><span class="style7"><span class="style4 style7">rpm</span></span></td>
      <td><span class="style7 style7"><?php echo $row['rpm'];?></span></td>
      <td><span class="style7"><span class="style4 style7">Oil_immerced_disc_breakers</span></span></td>
      <td><span class="style7 style7"><?php echo $row['Oil_immersed_disc_breakers'];?></span></td>
    </tr>
    <tr>
      <td height="26"><span class="style9">Rs.<?php echo $row['Price'];?></span></td>
      <td><span class="style7"></span></td>
      <td><span class="style4 style7 style7">color</span></td>
      <td><span class="style7 style7"><?php echo $row['color'];?></span></td>
      <td><span class="style7"><span class="style4 style7">Power_steering</span></span></td>
      <td><span class="style7 style7"><?php echo $row['Power_steering'];?></span></td>
      <td><span class="style7"><span class="style4 style7">Air_filters</span></span></td>
      <td><span class="style7 style7"><?php echo $row['Air_filters'];?></span></td>
    </tr>
    <tr>
      <td><strong><a href="book_tractor.php?id=<?php echo $row['id'];?>&tname=<?php echo $row['Tractor_name'];?>&price=<?php echo $row['Price'];?>">BOOK TRACTOR</a></strong></td>
      <td><span class="style7"></span></td>
      <td><span class="style7"><span class="style4 style7 style7">hp</span></span></td>
      <td><span class="style7 style7 style7"><?php echo $row['hp'];?></span></td>
      <td><span class="style7"></span></td>
      <td><span class="style7"></span></td>
      <td><span class="style7"></span></td>
      <td><span class="style7"></span></td>
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
<?php include('footer.php');?>				