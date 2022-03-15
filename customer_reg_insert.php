<?php
require_once('dbcon.php');
$fname=$_POST['t1'];
$lname=$_POST['t2'];
$gender=$_POST['t3'];
$city=$_POST['t4'];
$address=$_POST['t5'];
$contact=$_POST['t6'];
$email=$_POST['t7'];
$photo=$_FILES['file']['name'];
$ss="insert into customer_reg values('$fname','$lname','$gender','$city','$address','$contact','$email','$photo')";
$rs=mysql_query($ss);
if($rs)
{
 $pass=rand();
 $msg="your username is".$email."and password is:".$pass;
$ch = curl_init();
$user="mallikarjunbs143@gmail.com:151697";
$receipientno=$contact; 
$senderID="TEST SMS"; 
$msgtxt=$msg; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);
echo"inserted";


$m="insert into login values('$email','$pass','customer')";
mysql_query($m);

}
else
{
echo"not inserted";
}
?>