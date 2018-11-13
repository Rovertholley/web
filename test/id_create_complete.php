<html>
<meta charset="UTF-8"/>
<head>

<head>
<body>
<?php
mysql_connect("localhost","root","123") or die(mysql_error());
mysql_select_db("account"); 
$ID = $_POST["id"];      
$NEWPASS = $_POST["newpass"];    
$RENEWPASS = $_POST["renewpass"];
$NAME = $_POST["name"];
$BIRTH = $_POST["birth"];
$GENDER = $_POST["gender"];
$ADDRESS = $_POST["address"];
$PHONE = $_POST["phone"];

$sql = "insert into user (id, newpass, renewpass, name, birth, gender, address, phone) values ('$ID', '$NEWPASS', '$RENEWPASS', '$NAME', '$BIRTH', '$GENDER', '$ADDRESS', '$PHONE')";
mysql_query($sql) or die (mysql_error());
?>
Complete Create!!
<form method='post'>
<input type=button value="메인화면으로" style="height:50px" onClick="location.href='index.html'">
</body>
</html>

<?php
mysql_connect("localhost","root","123")or die(mysql_error());
mysql_select_db("account");

$sql="SELECT * FROM user";
#$sql="SELECT * FROM Driver";
$result=mysql_query($sql) or die(mysql_error());

echo "
<html>
<body>
<table width='100' border='1'>
<tr>
<h2> Apply List </h2>
<td align='center'>id</td>
<td align='center'>newpasswd</td>
<td align='center'>renewpasswd</td>
<td align='center'>name</td>
<td align='center'>birth</td>
<td align='center'>gender</td>
<td align='center'>address</td>
<td align='center'>phone</td>
</tr>
";
while($row=mysql_fetch_array($result))
{
echo("
<tr>
<td align='center'>$row[id]</td>
<td align='center'>$row[newpass]</td>
<td align='center'>$row[renewpass]</td>
<td align='center'>$row[name]</td>
<td align='center'>$row[birth]</td>
<td align='center'>$row[gender]</td>
<td align='center'>$row[address]</td>
<td align='center'>$row[phone]</td>
</tr>
");
}
?>
