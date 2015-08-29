<?php


	$pegawai['nama']="Budi Hasan";
	$pegawai['divisi']="Education";
	$pegawai['gaji']=5000;
	
	$mobil=array("manufaktur"=>"Honda","year"=>1980,"color"=>'yellow');
	$nama_peg=$pegawai['nama];
	
	print "Nama Pegawai adalah = $nama_peg <br>";
	print "Nama Divisi " . $pegawai ['divisi'] . "<br>" ;
	
	foreach ($pegawai as $key => value) {
		print"Key=$key value=$value <br>";
	}
	
	foreach ($mobil as $v1 => $v2 ) {
		print " Key = $v1 Value = $v2 <br>";
	}
	















?>