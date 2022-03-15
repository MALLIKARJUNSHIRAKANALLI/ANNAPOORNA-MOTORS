<?php include('header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>

                <div align="center" class="style1">Booking</div>
                <?php
				require_once('dbcon.php');
				$id=$_GET['id'];
				$ss="select * from booking where Id='$id'";
				$rs=mysql_query($ss);
				$row=mysql_fetch_array($rs);
				?>
<form name="form1" method="post" action="booking_update2.php">
				  <table width="479" align="center">
                    <tr>
                      <td>Id</td>
                      <td><label>
                        <input type="text" name="t1" id="t1" style="width:200px;" 
                        value="<?php echo $row['Id'];?>" readonly>
                      </label></td>
                    </tr>
                    <tr>
                      <td>cust_id</td>
                      <td><label>
                      <input type="text" name="t2" id="t2" style="width:200px;" 
                      value="<?php echo $row['cust_id'];?>">
					  </label></td>
                    </tr>
                    <tr>
                      <td>tractor_name</td>
                      <td><input type="text" name="t3" id="t3" style="width:200px;"
					  value="<?php echo $row['Tractor_name'];?>"></td>
                    </tr>
                    <tr>
                      <td>book_date</td>
                      <td><input type="text" name="t4" id="t4" style="width:200px;" value="<?php echo $row['Book_date'];?>" /></td>
                    </tr>
                    <tr>
                      <td>book_time</td>
                      <td><input type="text" name="t5" id="t5" style="width:200px;" value="<?php echo $row['Book_time'];?>"></td>
                    </tr>
                    <tr>
                      <td>book_status</td>
                      <td><input type="text" name="t6" id="t6" style="width:200px;" value="<?php echo $row['Book_status']?>"/></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button" id="button" value="Submit" style="background-color:#FF9900; color:#FFFFFF;width:100px;">
                        <input type="reset" name="button2" id="button2" value="Reset" style="background-color: #009933; color:#FFFFFF;width:100px;">
                      </label></td>
                    </tr>
                  </table>
</form>
				<?php include('footer.php');?>