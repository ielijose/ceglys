<? 
	if (!isset($_SESSION)) {  session_start(); }

	require_once "../../assets/php/tutor.php";

	$id = $_SESSION['id_alumno'];


	$action = $_POST['action'];
	
	switch ($action){
		case 'nivelAprobado':
			$nivel = $_POST['nivel'];
			$nota =  $_POST['puntuacion'];

			$query = "INSERT INTO notas (usuario_id, evaluacion_id, nota, estado)
						VALUES ('$id', '$nivel', '$nota', 'si')";
			mysql_query($query) or die(mysql_errno());
			break;
		case 'nivelReprobado':
			$nivel = $_POST['nivel'];
			$nota =  $_POST['puntuacion'];

			$query = "INSERT INTO notas (usuario_id, evaluacion_id, nota, estado)
						VALUES ('$id', '$nivel', '$nota', 'no')";
			mysql_query($query) or die(mysql_errno());
			break;
	}






?>