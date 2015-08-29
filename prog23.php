<?php


$umur=30;
if ($umur <6) {
	print "Balita";
	}  
	

else if ($umur <18) {
	print "Remaja";
}

	else if ($umur <30) {
			print"Dewasa";
	}
	else {
		print "usia matang";
	}

print "<br>";

	
switch ($umur) {
	case $umur <6:
		print "Balita";
		break;
	case $umur < 18:
		print "remaja";
		break;
	case $umur <30:
		print "dewasa";
		break;
	default:
		print "usia matang";
}
	





?>