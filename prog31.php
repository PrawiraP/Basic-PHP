<?php
//array
//index selalu mulai dari 0, bukan dari 1

$saldo=array(2000,3000,4000,5000,6000,7000,8000,9000,200,300,400,500);

// $saldo[0]= 2000;
// $saldo[1]=4000;
//...
// $saldo[11]=500;

print$saldo[3];

print "<br>";
//..............................
//variabel i,j,k udh pasti index
for ($i=0; $i<12; $i++) {
	$j=$i+1;
	print "saldo bulan $j = $saldo[$i]  <br>";
	//print "saldo bulan " .  ($i+1) . " =$saldo[$i]  <br>";
	//print "saldo bulan $i=$saldo[$i]  <br>";
}

?>