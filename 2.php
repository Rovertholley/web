<?php
#$hostname="35.221.122.1";
$hostname="127.0.0.1";
$username="root";
$passwd="123";
$dbname="test";

$connect=mysql_connect($hostname,$username,$passwd) or die("Mysql Fail");

$result=mysql_select_db($dbname,$connect);

if($result) {
echo("Success");
}
else {
echo("SERver FAil");
}

mysql_close($connect);
?>
