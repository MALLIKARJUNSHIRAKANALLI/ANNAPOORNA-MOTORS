<?php include('customer_header_pay.php');?>
<?php
require_once('dbcon.php');
$i=$_POST['t1'];
$c=$_POST['t2'];				  
$d=$_POST['t3'];
$cst=$_POST['t4'];
$ad=$_POST['t5'];
$rem=$_POST['t6'];

$sql="insert into payment values('$i','$c','$d','$cst','$ad','$rem')";
mysql_query($sql);
if($sql)
{
$mm="update booking set Book_status='paid' where Id='$i'";
$mm1=mysql_query($mm);
}			  
?>
                  
<form action="../../Tractor/web/payment_insert.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_Z1qzBJgJYDcceP"
    data-amount="<?php echo $ad."00"?>"
    data-buttontext="Pay with Razorpay"
    data-name="EFT"
    data-description="CRACKERS"
    data-image=""
    data-prefill.name="Gururaj Naik"
    data-prefill.email="gurusirsi25@gmail.com"
    data-theme.color="#F37254"></script>
   
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
			    <?php include('footer.php');?>