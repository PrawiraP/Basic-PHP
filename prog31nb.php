<?php
//array
//index selalu mulai dari 0, bukan dari 1

$saldo=array(2000,3000,4000,5000,6000,7000,8000,9000,200,300,400,500);
$bulan=array("January","February","March","April","May","June","July","August","September","October","November","December");
$nmax = count ($saldo);
print "Jumlah array yang diperoleh dari nmax= $nmax <br>";
// $saldo[0]= 2000;
// $saldo[1]=4000;
//...
// $saldo[11]=500;



print "Cara mengetahui nilai angka ke 3 dari 0=$saldo[3]<br>";
print "<br>";
//..............................
//variabel i,j,k udh pasti index
print "<pre>";
for ($i=0; $i<$nmax; $i++) {
	//sebelum nmax yg diatas itu 12, jadi kalo kebanyakan data pake nmax aja.
	$j=$i+1;
	//print "saldo bulan $j = $saldo[$i]  <br>";
	//print "saldo bulan $j = $fn  <br>";
	//print "saldo bulan " .  ($i+1) . " =$saldo[$i]  <br>";
	print "saldo bulan $bulan[$i]=$saldo[$i]  <br>";
	//$fn=number_format($saldo[$i],2);
	
}
print "</pre>";
//<pre> buat sejajarin
$total=0;
for ($i=0; $i<$nmax; $i++) {
	$total=$total + $saldo[$i];
	$rata=($total + $saldo[$i])/12;
}
print "Jumlah= $total <br>";
print "Rata-rata = $rata <br>"
?>
