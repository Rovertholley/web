<html>
<head>
<title>
</title>
</head>
<body>
<h1>Order Page</h1>

<?php
mysql_connect("localhost","root","123")or die(mysql_error());
mysql_select_db("menu");
#$sql="SELECT IN_ID, IN_UID, CASE IN_Check WHEN 1 THEN 'Yes' WHEN 2 THEN 'NO' END AS 
#IN_Check FROM Driver";
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
<td align='center'>Test</td>
</tr>
";
while($row=mysql_fetch_array($result))
{
echo("
<tr>
<td align='center'>$row[menu]</td>
<td align='center'>$row[price]</td>
<td align='center'>
<select name="Test">
")
#while($rows=mysql_fetch_array($result)) {
#echo("<option value="")=$rows['menu'];?>"><?=$rows['menu'];?>
#</option>
<?
}
?>
</td>
</tr>
");
}
?>
</body>
</html>

