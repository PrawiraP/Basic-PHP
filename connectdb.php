<?php
// database connection php <-------> database

function connectDB ()

{	
	$host="localhost";
	$user="root";
	$password=null;
	try{
		$db=mysql_connect($host,$user,$password);
		if ($db) {
				mysql_select_db("mydb",$db);
			return $db;
		}
		else{
			throw new exception ("cant connect to mysql");
		}
	}
	catch (exception $e){
		echo $e->getmessage();
	}
}
function closeDB($db)
{
	mysql_close($db);
}
/*
hostnya namanya localhost gara gara private
usernya namanya root
passwordnya gak ada null
nah mysql ctry ke ketiga function
if (kalo) berhasil (positif), akan access dan return\
kalo gak bakal dikasi message dan bakal dikasi tau salahnya dimana
*/



?>