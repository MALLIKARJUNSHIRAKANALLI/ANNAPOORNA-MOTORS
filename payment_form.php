<div align="center">Billing
</div>
<script>
function balance()
{
var t=document.getElementById("t4").value;
var a=document.getElementById("t5").value;
var bal=t-a;
document.getElementById("t6").value=bal;
}

</script>
<?php
require_once('dbcon.php');
session_start();
$cust_id=$_SESSION['t1'];
$id=$_GET['id'];

$ql="select * from billing where Id='$id' and cust_id='$cust_id'";
$qs=mysql_query($ql);
$rq=mysql_fetch_array($qs);
$tprice=$rq['price'];


$sql="select max(Id) from payment";
$ss=mysql_query($sql);
$row=mysql_fetch_array($ss);
$count=$row[0];
if($count==0)
{
$count=1;
}
else
{
$count++;
}
?>
<form name="form1" method="post" action="payment2.php">

  <table width="496" border="1" align="center">
    <tr>
      <td width="181">BILL ID</td>
      <td width="299"><label>
        <input type="text" name="t1" id="t1" value="<?php echo $count;?>">
      </label></td>
    </tr>
    <tr>
      <td>CUST ID</td>
      <td><input type="text" name="t2" id="t2" value="<?php echo $cust_id;?>"></td>
    </tr>
    <tr>
      <td>PAYMENT_DATE</td>
      <td><input type="text" name="t3" id="t3" value="<?php echo date('Y-m-d');?>"></td>
    </tr>
    <tr>
      <td>TOTAL COST</td>
      <td><input type="text" name="t4" id="t4" value="<?php echo $tprice;?>"></td>
    </tr>
    <tr>
      <td>ADVANACE PAY</td>
      <td><input type="text" name="t5" id="t5" onBlur="balance();"></td>
    </tr>
    <tr>
      <td>REMAINING</td>
      <td><input type="text" name="t6" id="t6"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Submit">
      </label></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php include('header.php');?>
