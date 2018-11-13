<html>
<meta charset="UTF-8"/>
<head>
<title>
</title>
</head>
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<body>
<h1>No Taste Kimbab!!</h1>
<?php
mysql_connect("localhost","root","123")or die(mysql_error());
mysql_select_db("menu");

#$sql="SELECT IN_ID, IN_UID, CASE IN_Check WHEN 1 THEN 'Yes' WHEN 2 THEN 'NO' END AS IN_Check FROM Driver";
#$sql="SELECT * FROM Driver";
$sql="SELECT * from kimbab";
$result=mysql_query($sql) or die(mysql_error());

echo "
<html>
<body>
<table width='100' border='1'>
<tr>
<h2> Kimbab List </h2>
<td align='center'>Menu</td>
<td align='center'>Price</td>
</tr>
";
while($row=mysql_fetch_array($result))
{
echo("
<tr>
<td align='center'>$row[menu]</td>
<td align='center'>$row[price]</td>
</tr>
");
}
?>
<form action="order.php">
<input type="submit" value="Order">
</link>
</form>
</body>
</html>
