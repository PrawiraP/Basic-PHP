<?php
include"cetak.php";
//require "cetak.php" // require kalo filenya gak ketemu, crash, kalo include masih jalan

function jumlah (&$a , $b)
{
	$z = $a + $b;
	$a=$a*1.1;
	// bisa blank lbh makes sense
	$b = 200;
	return $z;
		
}
$gaji=1000;
$bonus=200;

$thp= jumlah( $gaji, $bonus);

print " Take Home Pay = $thp <br>";
print"Gaji saya sekarang = $gaji <br>";
print"Bonus saya = $bonus <br>";
?>
<?php

cetakGaris (3);
?>









