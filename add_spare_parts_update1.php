<?php include('header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>

                <h3 align="center" class="style1">Add spare_parts</h3>
                 <?php
						   require_once('dbcon.php');
						   $id=$_GET['id'];
						   $ss="select * from add_spare_parts where Id='$id'";
						   $rs=mysql_query($ss);
						   $row=mysql_fetch_array($rs);
						   ?>
						  
<form action="add_spare_parts_update2.php" method="post" enctype="multipart/form-data" name="form1">
<table width="479" align="center">
                    <tr>
                      <td>Id</td>
                      <td>
                        <input type="text" name="t1" id="t1" style="width:200px;" 
                        value="<?php echo $row['Id'];?>" readonly>
                      </td>
                    </tr>
                    <tr>
                      <td>company_name</td>
                      <td>
                      <input type="text" name="t2" id="t2" style="width:200px;"
                      value="<?php echo $row['Company_name'];?>">
                      </td>
                    </tr>
                    <tr>
                      <td>Spare_parts_name</td>
                      <td>
                      <input type="text" name="t3" id="t3" style="width:200px;"
                      value="<?php echo $row['spare_parts_name'];?>">
                      </td>
                    </tr>
                    <tr>
                      <td>Unit_price</td>
                      <td><input type="text" name="t4" id="t4" style="width:200px;" required pattern="[0-9]+" title="enter numbers only" 
                      value="<?php echo $row['Unit_price'];?>"/></td>
                    </tr>
                    <tr>
                      <td>Discription</td>
                      <td>
                      <input type="text" name="t5" id="t5" style="width:200px;"
                      value="<?php echo $row['Description'];?>">
                      </td>
                    </tr>
                    <tr>
                      <td>Photo</td>
                      <td><label>
                        <input type="file" name="file" id="file" required 
                        value="<?php echo $row['Photo'];?>"/>
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