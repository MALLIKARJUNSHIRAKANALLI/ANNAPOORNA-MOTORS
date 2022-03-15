<?php include('header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style5 {color: #FFFFFF; font-weight: bold; }
-->
</style>
<p align="center" class="style1">Payment</p>
                <form action="add_spare_parts_insert.php" method="post" enctype="multipart/form-data" name="form1">
                  <table width="570" border="1" align="center">
                    <tr bgcolor="#0000CC">
                      <td width="17"><span class="style5">Id</span></td>
                      <td width="47"><span class="style5">cust_id</span></td>
                      <td width="94"><span class="style5">payment_date</span></td>
                      <td width="65"><span class="style5">total_cost</span></td>
                      <td width="123"><span class="style5">Advance_payment</span></td>
                      <td width="72"><span class="style5">Remaining</span></td>
                      <th width="106" bgcolor="#FF0000"><span class="style5">activity</span></th>
                    </tr>
                    <?php
					require_once('dbcon.php');
					$ss="select * from payment";
					$rs=mysql_query($ss);
					while($row=mysql_fetch_array($rs))
					{
					?>
					 <tr>
                      <td><?php echo $row['Id'];?></td>
                      <td><?php echo $row['cust_id'];?></td>
                      <td><?php echo $row['Payment_date'];?></td>
                      <td><?php echo $row['total_cost'];?></td>
                      <td><?php echo $row['Advance_payment'];?></td>
                      <td><?php echo $row['Remaining'];?></td>
           <th><a href="payment_del.php?id=<?php echo $row['Id'];?>">delete</a></th>
                    </tr>
                    <?php
					}
					?>
                  </table>
                  <div align="justify"></div>
</form>
				