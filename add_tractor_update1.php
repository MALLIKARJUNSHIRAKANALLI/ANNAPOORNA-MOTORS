<?php include('header.php');?>
<style type="text/css">
<!--
.style1 {font-size: 36px}
-->
</style>
    <h3 align="center" class="style1">Add_tractor</h3>
    <?php
						   require_once('dbcon.php');
						   $id=$_GET['id'];
						   $ss="select * from add_tractor where id='$id'";
						   $rs=mysql_query($ss);
						   $row=mysql_fetch_array($rs);
						   ?>
				
<form action="add_tractor_update2.php" method="post" enctype="multipart/form-data" name="form1">
<table width="479" align="center">
<input type="hidden" name="id" value="<?php echo $id;?>" />
                    <tr>
                      <td>branch</td>
                      <td><label>
                        <input type="text" name="t1" id="t1" style="width:200px;"                        value="<?php echo $row['Branch'];?>" readonly>

                      </label></td>
                    </tr>
                    <tr>
                      <td>tractor_name</td>
                      <td><input type="text" name="t2" id="t2" style="width:200px;"                        value="<?php echo $row['Tractor_name'];?>">
</td>
                    </tr>
                    <tr>
                      <td>company</td>
                      <td><input type="text" name="t3" id="t3" style="width:200px;"                        value="<?php echo $row['Company'];?>">
</td>
                    </tr>
                    <tr>
                      <td>color</td>
                      <td><input type="text" name="t7" id="t7" style="width:200px;" 
                      value="<?php echo $row['color'];?>"/></td>
                    </tr>
                    <tr>
                      <td>hp</td>
                      <td><input type="text" name="t4" id="t4" style="width:200px;" 
                      value="<?php echo $row['hp'];?>"></td>
                    </tr>
                    <tr>
                      <td>rpm</td>
                      <td><input type="text" name="t5" id="t5" style="width:200px;" 
                      value="<?php echo $row['rpm'];?>"/></td>
                    </tr>
                    <tr>
                      <td>Power_steering</td>
                      <td><input type="text" name="t6" id="t6" style="width:200px;" 
                      value="<?php echo $row['Power_steering'];?>"/></td>
                    </tr>
                    <tr>
                      <td>Oil_immersed_disc_breakers</td>
                      <td><input type="text" name="t8" id="t8" style="width:200px;" 
                      value="<?php echo $row['Oil_immersed_disc_breakers'];?>"/></td>
                    </tr>
                    <tr>
                      <td>Air_filters</td>
                      <td><input type="text" name="t9" id="t9" style="width:200px;" 
                      value="<?php echo $row['Air_filters'];?>"/></td>
                    </tr>
                    <tr>
                      <td>Price</td>
                      <td><input type="text" name="t10" id="t10" style="width:200px;" 
                      value="<?php echo $row['Price'];?>"/></td>
                    </tr>
                    <tr>
                      <td>Photos</td>
                      <td><label>
                        <input type="file" name="file" id="file" 
                        value="<?php echo $row['photo'];?>"/>
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