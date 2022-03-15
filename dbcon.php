<?php
define("DBSERVER","localhost");
define("DBUSER","root");
define("DBPASSWORD","");
define("DBNAME","tractor");
$con=mysql_connect(DBSERVER,DBUSER,DBPASSWORD);
$rs=mysql_select_db(DBNAME,$con);
if(!$rs)
{
echo "db could not be connected";
}

?>