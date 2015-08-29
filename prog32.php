<?php
	$kota=array("Jakarta","Bogor","Depok","Tangerang","Bekasi");
	$kode_kota=array("JKT","BGR","DPK","TRG","BEK");
	$nmax=count($kota);
?>
<!DOCTYPE html>
<html>
<head>
	<title>  Tutor PHP </title>
</head>
<body>
<p>
	<select name="daftarkota">
			<option value="JKT">Jakarta</option>
				<option value="BGR">Bogor</option>
					<option value="DPK">Depok</option>
						<option value="TRG">Tangerang</option>
							<option value="BKS">Bekasi</option>
							
		
	
	
	
	</select>
	<br>
	</p>
<?php
     print "<select name='daftarkota2'>\n";
	 for ($i=0; $i<$nmax; $i++){
		 
		 print "<option value='$kode_kota[$i]'>$kota[$i] </option>\n";
	 }




print"</select>";
?>	
</body>
</html>

