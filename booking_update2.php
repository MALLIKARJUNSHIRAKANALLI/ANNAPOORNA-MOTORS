<?php
require_once('dbcon.php');
$id=$_POST['t1'];
$customer_id=$_POST['t2'];
$tractor_name=$_POST['t3'];
$book_date=$_POST['t4'];
$book_time=$_POST['t5'];
$book_status=$_POST['t6'];
$ss="update booking  set Id='$id',cust_id='$customer_id',Tractor_name='$tractor_name',Book_date='$book_date',Book_time='$book_time',Book_status='$book_status' where Id='$id'";
$rs=mysql_query($ss);
if($ss)
{
?>
<script>
alert("updated successfully");
document.location="booking_view.php";
</script>
<?php
}
else
{
echo mysql_error();
}
?>