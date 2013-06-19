<?php

	$host = "localhost";
	$database = "tutor";
	$username = "root";
	$password = "2512";
	$tutor = mysql_connect($host, $username, $password) or trigger_error(mysql_error(), sE_USER_ERROR); 

	mysql_select_db($database);
?>