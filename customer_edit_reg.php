<?php include('customer_header.php');?>
<style type="text/css">
<!--
.style1 {font-size: 36px}
-->
</style>


				<h3 align="center" class="style1">Customer Registration</h3>
<form action="customer_reg_update.php" method="post" enctype="multipart/form-data" name="form1">
<?php
require_once('dbcon.php');
session_start();
$user=$_SESSION['t1'];
$sql="select * from customer_reg where EMAIL='$user'";
$ss=mysql_query($sql);
$row=mysql_fetch_array($ss);
?>
<table width="479" align="center">
                    <tr>
                      <td>Fname</td>
                      <td><label>
                      <input type="text" name="t1" id="t1" style="width:200px;" value="<?php echo $row['FNAME'];?>" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Lname</td>
                      <td><input type="text" name="t2" id="t2" style="width:200px;" value="<?php echo $row['LNAME'];?>"></td>
                    </tr>
                    <tr>
                      <td>gender</td>
                      <td><input type="text" name="t3" id="t3" style="width:200px;" value="<?php echo $row['GENDER'];?>"></td>
                    </tr>
                    <tr>
                      <td>city</td>
                      <td><input type="text" name="t4" id="t4" style="width:200px;" value="<?php echo $row['CITY'];?>"/></td>
                    </tr>
                    <tr>
                      <td>address</td>
                      <td><input type="text" name="t5" id="t5" style="width:200px;" value="<?php echo $row['ADDRESS'];?>"></td>
                    </tr>
                    <tr>
                      <td>contact</td>
                      <td><input type="text" name="t6" id="t6" style="width:200px;" value="<?php echo $row['CONTACT'];?>"/></td>
                    </tr>
                    <tr>
                      <td>email</td>
                      <td><input type="text" name="t7" id="t7" style="width:200px;" value="<?php echo $row['EMAIL'];?>" readonly="readonly" /></td>
                    </tr>
                    <tr>
                      <td>Photos</td>
                      <td><label>
                        <input type="file" name="file" id="file" />
                      </label></td>
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