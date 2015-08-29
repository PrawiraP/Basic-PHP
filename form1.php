<!DOCTYPE html>
<html>
<head>

	<title> My PHP Web Application</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
</head>
<body>

<?php

print "Welcome To Your New Email, <br> ";
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
/*
if ($os1=="win") {
	print " Anda adalah pengguna Windows <br>";
}

if ($os2=="linux") {
	print "Anda adalah pengguna linux <br>";
}
*/
?>

</body>
</html>