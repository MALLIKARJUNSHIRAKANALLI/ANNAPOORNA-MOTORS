<?php include('admin_header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style7 {color: #FFFFFF; font-weight: bold; }
-->
</style>

                <h3 align="center" class="style1">Tractor show_room</h3>
<form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="725" border="1" align="center">
    <tr bgcolor="#0000CC">
      <td width="126"><span class="style7">BRANCH_NAME</span></td>
      <td width="84"><span class="style7">LOCATION</span></td>
      <td width="165"><span class="style7">SHOW_ROOM_NAME</span></td>
      <td width="75"><span class="style7">ADDRESS</span></td>
      <td width="142"><span class="style7">OFFICE_CONTACT</span></td>
      <th width="93" bgcolor="#FF0000"><span class="style7">activity</span></th>
    </tr>
                    <?php
					require_once('dbcon.php');
					$ss="select * from tractor_show_room";
					$rs=mysql_query($ss);
					while($row=mysql_fetch_array($rs))
					{
					?>
        <tr>
      <td><?php echo $row['BRANCH_NAME'];?></td>
      <td><?php echo $row['LOCATION'];?></td>
      <td><?php echo $row['SHOW_ROOM_NAME'];?></td>
      <td><?php echo $row['ADDRESS'];?></td>
      <td><?php echo $row['OFFICE_CONTACT'];?></td>
     <th bgcolor="#F0F0F0"><a href="tractor_show_room_del.php?id=<?php echo $row['BRANCH_NAME'];?>">delete</a></th>
    </tr>
    <?php
	}
	?>
  </table>
  <div align="justify"></div>
</form>
				<?php include('footer.php');?>