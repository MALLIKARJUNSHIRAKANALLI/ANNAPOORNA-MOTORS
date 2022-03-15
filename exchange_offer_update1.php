<?php include('header.php');?>
<style type="text/css">
<!--
.style5 {font-weight: bold}
.style6 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
<div align="center" class="style1"><span class="style6">Exchange Offer
  </span>
   <?php
				require_once('dbcon.php');
				$id=$_GET['id'];
				$ss="select * from exchange_offer where product='$id'";
				$rs=mysql_query($ss);
				$row=mysql_fetch_array($rs);
				?>
  <form name="form1" method="post" action="exchange_offer_update2.php">
    <table width="335" border="1">
      <tr>
        <td><span class="style5">product</span></td>
        <td><label>
          <select name="l1" size="1" id="l1">
            <option value="tractor">tractor</option>
            <option value="rooter">rooter</option>
            <option value="tractor spare paerts">tractor spare paerts</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td><span class="style5">offer_start</span></td>
        <td><label>
          <input type="text" name="t1" id="t1" value="<?php echo $row['Offer_start'];?>">
        </label></td>
      </tr>
      <tr>
        <td><span class="style5">offer_end<br>
        </span></td>
        <td><input type="text" name="t2" id="t2" value="<?php echo $row['Offer_end'];?>"></td>
      </tr>
      <tr>
        <td><span class="style5">discount</span></td>
        <td> <input type="text" name="t3" id="t3"  value="<?php echo $row['Discount'];?>"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
        <input type="submit" name="button" id="button" value="Submit" style="background-color:#FF9900; color:#FFFFFF;width:100px;" />
        <input type="reset" name="button2" id="button2" value="Reset" style="background-color: #009933; color:#FFFFFF;width:100px;" />
        </label></td>
      </tr>
    </table>
    <label></label>
    <table width="200" border="1">
        </table>
  </form>
</div>
