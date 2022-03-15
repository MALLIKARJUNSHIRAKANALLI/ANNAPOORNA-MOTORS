<?php include('header2.php');?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>

                <div align="center" class="style1">Changepassword</div>
<form name="form1" method="post" action="changepass_con.php">
				  <table width="479" height="203" align="center">
                    <tr>
                      <td>Old Password</td>
                      <td><input type="password" name="t2" id="t2" style="width:200px;"></td>
                    </tr>
                    <tr>
                      <td>New Password</td>
                      <td><input type="password" name="t3" id="t3" style="width:200px;" /></td>
                    </tr>
                    <tr>
                      <td>Confirm Password</td>
                      <td><label>
                        <input type="password" name="t4" id="t4" style="width:200px;" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button" id="button" value="ChangePassword" style="background-color:#FF9900; color:#FFFFFF;width:100px;" />
                      <input type="reset" name="button2" id="button2" value="Reset" style="background-color: #009933; color:#FFFFFF;width:100px;" /></td>
                    </tr>
                  </table>
</form>
				<?php include('footer.php');?>