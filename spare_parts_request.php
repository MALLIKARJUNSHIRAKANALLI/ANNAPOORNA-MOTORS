<?php include('header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-weight: bold;
}
.style2 {font-size: 36px}
-->
</style>

                <div align="center" class="style1 style2">Spare_parts request</div>
<form name="form1" method="post" action="spare_parts_request_insert.php">
				  <table width="479" align="center">
                    <tr>
                      <td>Id</td>
                      <td><label>
                        <input type="text" name="t1" id="t1" style="width:200px;"required pattern="[A-Za-z0-9/s]+">
                      </label></td>
                    </tr>
                    <tr>
                      <td>cust_id</td>
                      <td><input type="text" name="t2" id="t2" style="width:200px;"required pattern="[A-Za-z0-9/s]+"></td>
                    </tr>
                    <tr>
                      <td>Spare_parts_name</td>
                      <td><input type="text" name="t3" id="t3" style="width:200px;"required pattern="[A-Za-z\s]+"></td>
                    </tr>
                    <tr>
                      <td>Request_date</td>
                      <td><input type="date" name="t4" id="t4" style="width:200px;" /></td>
                    </tr>
                    <tr>
                      <td>Request_time</td>
                      <td><input type="time" name="t5" id="t5" style="width:200px;"></td>
                    </tr>
                    <tr>
                      <td>Request_status</td>
                      <td><input type="text" name="t6" id="t6" style="width:200px;" /></td>
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
				