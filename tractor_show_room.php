<?php include('admin_header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>

                <h3 align="center" class="style1">Tractor show room</h3>
<form action="tractor_show_room_insert.php" method="post" enctype="multipart/form-data" name="form1">
<table width="479" align="center">
                    <tr>
                      <td>branch_name</td>
                      <td><label>
                        <input type="text" name="t1" id="t1" style="width:200px;"required pattern="[A-Za-z/s]+">
                      </label></td>
                    </tr>
                    <tr>
                      <td>location</td>
                      <td><input type="text" name="t2" id="t2" style="width:200px;"required pattern="[A-Za-z0-9]+"></td>
                    </tr>
                    <tr>
                      <td>show_room_name</td>
                      <td><input type="text" name="t3" id="t3" style="width:200px;"required pattern="[A-Za-z/s]+"></td>
                    </tr>
                    <tr>
                      <td>address</td>
                      <td><input type="text" name="t4" id="t4" style="width:200px;" required pattern="[A-Za-z0-9/s]+"/></td>
                    </tr>
                    <tr>
                      <td>office_cotact</td>
                      <td><input type="text" name="t5" id="t5" style="width:200px;"required pattern="[6-9,0-9]+"></td>
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