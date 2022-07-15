<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbnm = "penjualan";
	
	$conn = mysql_connect($host, $user, $pass);
	if ($conn) {
		$buka = mysql_select_db($dbnm);
		if (!$buka) {
			die ("Database tidak dapat di buka");
		}
	} else {
		die ("server mySQL tidak terhubung");
	}
	
	?>