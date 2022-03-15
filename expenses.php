<?php include('accountant_header.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>

                <div align="center" class="style1">EXPENSES</div>
<form name="form1" method="post" action="expenses_insert.php">
				  <table width="479" align="center">
                    <tr>
                      <td>expenses_name</td>
                      <td><label>
                        <input type="text" name="t1" id="t1" style="width:200px;"required pattern="[A-Za-z]+">
                      </label></td>
                    </tr>
                    <tr>
                      <td>expenses_type</td>
                      <td><input type="text" name="t2" id="t2" style="width:200px;"></td>
                    </tr>
                    <tr>
                      <td>expenses_date</td>
                      <td><input type="date" name="t3" id="t3" style="width:200px;"></td>
                    </tr>
                    <tr>
                      <td>expenses_amount</td>
                      <td><input type="text" name="t4" id="t4" style="width:200px;"required pattern="[0-9]+"/></td>
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