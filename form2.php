<!DOCTYPE html>
<html>
<head>

	<title> My PHP Web Application</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
</head>
<body>
INSERT INTO person (nama,pswd,email,catatan,gender,os1,os2)
VALUES('Prawira','xxxx','prawira@gmail.com','xxx','M','win','')
<?php

print "Welcome  Your New Email, " ;
$nama= $_POST['nama'];
$pswd= $_POST['pswd'];
$myemail= $_POST['myemail'];
$catatan=$_POST['catatan'];
$gender= $_POST['gender'];
$os1=isset($_POST['os1']) ? $_POST['os1']:"";
$os2=isset($_POST['os2']) ? $_POST['os2']:"";

print "Nama:$nama <br>"; 
print "Password = $pswd <br> ";
print "Email: $myemail <br>";
print "Catatan: $catatan<br>";
print "Operation System : $os1 <br>";
print "Operation System : $os2 <br>";
if($gender=="M"){
	print"Laki Laki <br>";
}
if($gender=="F"){
	print"Female<br>";
}
$sql="INSERT INTO person(nama,pswd,email,catatan,gender,os1,os2) VALUES(";
$sql .="'".$nama."',";
$sql .="'".$pswd."',";
$sql .="'".$myemail."',";
$sql .="'".$catatan."',";
$sql .="'".$gender."',";
$sql .="'".$os1."',";
$sql .="'".$os2."'";
$sql .=")";
//INSERT INTO person(nama,pswd,email,catatan,gender,os1,os2) VALUES('Marvin','marvinap','marvin@gmail.com','xxxx	','M','win','') 
//langsung aja lain kali, coding diatas itu asal mulanya saja
print "$sql = $sql <br>";

require_once"connectdb.php";
$conn=connectdb();

if ($conn){
	print" mySQL connected <br>";
}
else {
	print"No connection to Database <br>";
}

$str=mysql_query($sql);
//supaya kyk sign up, lgsg masuk ke data base querynya
?>

</body>
</html>