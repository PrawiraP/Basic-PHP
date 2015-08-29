<!DOCTYPE html>
<html>
<head>

	<title> My PHP Web Application</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
</head>
<body>

<?php
require_once "connectDb.php";

$conn=connectDb();

if ($conn){
	print"Database mySQL connected <br>";
}
else {
	print"No connection to mySQL Database <br>";
}

$str="select nama, email, catatan from person";
$res=mysql_query($str);
while ($obj=mysql_fetch_object($res)){
	print " $obj->nama-----------$obj->email---------------$obj->catatan <br>";
}


closeDB($conn);
?>

</body>
</html>