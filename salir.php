<?php 

    if (!isset($_SESSION)) {  session_start(); }

    $_SESSION['alumno'] = NULL;
    $_SESSION['id_alumno'] = NULL;
    $_SESSION['profesor'] = NULL;
    $_SESSION['id_profesor'] = NULL;

    $_SESSION = NULL;
    empty($_SESSION);

    session_destroy();

    header("location: index.php");

?>