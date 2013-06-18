<?php
	if (!isset($_SESSION)) {  session_start(); }

	require_once "../assets/php/tutor.php";
	require_once "../assets/php/GetSQLValueString.php";

	$id = $_SESSION['id_alumno'];


	if(!isset($_SESSION['alumno'])){
		header("Location: ../entrar.php?error");
	}

	/* NIVEL */
	$q = "SELECT n.id, n.usuario_id, n.evaluacion_id, n.nota, e.grupo 
			FROM notas n
			LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
			WHERE estado = 'si' AND usuario_id = '$id'
			ORDER BY evaluacion_id";
	$r = mysql_query($q) or die(mysql_errno());
	$nivel = 0;
	while( $cursos = mysql_fetch_object($r) ){
		$nivel = $cursos->evaluacion_id;
		$gruponivel = $cursos->grupo;
	}

	switch($nivel){
		case 0:
			$gruponivel = 1;
			break;
		case 1:
			$gruponivel = 1;
			break;
		case 2:
			$gruponivel = 2;
			break;
		case 3:
			$gruponivel = 2;
			break;
		case 4:
			$gruponivel = 3;
			break;
		case 5:
			$gruponivel = 3;
			break;

	}

		






	//echo $nivel;
	

?>