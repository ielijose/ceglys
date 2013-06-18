<?php
	if (!isset($_SESSION)) {  session_start(); }

	require_once "../assets/php/tutor.php";
	require_once "../assets/php/GetSQLValueString.php";


	if(!isset($_SESSION['profesor'])){
		header("Location: ../entrar.php?error");
	}

	

?>