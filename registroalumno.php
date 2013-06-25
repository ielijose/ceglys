<? 
  require "assets/php/setup.php";

  $action = $_POST['action'];
  $repetido=false;
  switch ($action) {    
    case 'registrodocente':
      $nombre = $_POST['nombre'];
      $cedula = $_POST['cedula'];
      $usuario = $_POST['usuario'];
      $password = $_POST['pass'];

      $query = "SELECT * from usuarios WHERE usuario ='$usuario'";
      $r = mysql_query($query);
      $count = mysql_fetch_object($r);

      if($count){
        $repetido=true;        
      }else{

        $insertSQL = sprintf("INSERT INTO usuarios (nombre, ci, usuario, password, tipo) VALUES (%s, %s, %s, %s, 'alumno')",
                      GetSQLValueString($nombre, 'text'), GetSQLValueString($cedula, 'text'), 
                      GetSQLValueString($usuario, 'text'), GetSQLValueString($password, 'text'));

        mysql_query($insertSQL) or die(mysql_errno().$insertSQL);
        header("Location: exito.php?ref=alumno");
      }

      break;
    
    default:
      # code...
      break;
  }


?>


<!DOCTYPE html>
<html lang="es">
<head>
  	<title>Tutor Interactivo para practicas basicas de enfermeria</title>
  	<meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Ceglys Afanador Leon">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-1.7.1.min.js"></script>
    <script src="assets/js/superfish.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/tms-0.4.1.js"></script>
    <script src="assets/js/slider.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="assets/js/html5.js"></script>
	<link rel="stylesheet" href="assets/css/ie.css"> 
<![endif]-->

<style type="text/css">
  input[type="text"], input[type="password"]{
    padding: 5px;
    border-radius: 4px;
  }
</style>
</head>
<body>
<div class="main-indents">
  <div class="main">
        <!-- Header -->
    <header>
          <? $p=3; require "assets/nav.php"; ?>
          <div class="clear"></div>
    </header>
        <!-- Slider -->
        
        <!-- :Slider -->
        <!-- Content -->
          <section id="content"><div class="ic">Ceglys Afanador @ ceglysafanador.com.ve Junio, 2013!</div>
                <div class="container_12" style="margin:10px;">  
                  <? if($repetido){
                        echo "<h1 align='center' style='color:red'>El nombre de usuario ya esta en uso, intente nuevamente.</h1> <br><br>";
                    } ?>

                  <form action="?" method="POST" style="width:400px; margin:0 auto;" name="registro" id="registro">
                                     <h1>Registro Alumno</h1><hr>    
                    <table align="center" >
                      <tr>
                        <td><h6>Nombre y apellido</h6></td>
                        <td width="30">&nbsp;</td>
                        <td><input type="text" name="nombre" id="nombre" placeholder="Nombre"></td>
                      </tr>

                      <tr>
                        <td><h6>Cédula</h6></td>
                        <td width="30">&nbsp;</td>
                        <td><input type="text" name="cedula"  id="cedula" placeholder="Cédula"></td>
                      </tr>

                      <tr>
                        <td><h6>Usuario</h6></td>
                        <td width="30">&nbsp;</td>
                        <td><input type="text" autocomplete="off" id="usuario"  name="usuario" placeholder="Usuario"></td>
                      </tr>

                      <tr>
                        <td><h6>Contraseña</h6></td>
                        <td width="30">&nbsp;</td>
                        <td><input type="password" name="pass"  id="pass"  placeholder="Contraseña"></td>
                      </tr>

                      <tr>
                        <td><h6>Repetir contraseña</h6></td>
                        <td width="30">&nbsp;</td>
                        <td><input type="password" name="pass2"  id="pass2" placeholder="Contraseña"></td>
                      </tr>


                      <tr>
                        <td colspan="3" align="center"><input type="submit" value="Registrar"></td>
                      </tr>
                    </table>
                     <input type="hidden" name="action" value="registrodocente"> 
                  </form> 

             
                  
                </div>
          </section>
        <!-- Footer -->
    <? require "assets/footer.php"; ?>

  </div>
</div>
</body>
</html>


<script type="text/javascript">
  
  $("#registro").submit(function(){
    var registro = document.registro,
        enviar = true;


    /* validar */

      var nombre = $("#nombre").val(),
          cedula = $("#cedula").val(),
          usuario = $("#usuario").val(),
          pass = $("#pass").val(),
          pass2 = $("#pass2").val();

      if(!nombre.length>0){
        alert("El nombre es obligatorio");
        if(enviar){$("#nombre").focus();}
        enviar = false;
      }

      if(!cedula.length>0){
        alert("La cédula de identidad es obligatoria");
        if(enviar){$("#cedula").focus();}
        enviar = false;
      }

      if(!usuario.length>0){
        alert("El usuario es obligatorio");
        if(enviar){$("#usuario").focus();}
        enviar = false;
      }

      if(!pass.length>0){
        alert("La contraseña es obligatoria");
        if(enviar){$("#pass").focus();}
        enviar = false;
      }

      if(!pass2.length>0){
        alert("Debe repetir la contraseña");
        if(enviar){$("#pass2").focus();}
        enviar = false;
      }

      if(pass.length>0 && pass2.length>0){
        if(pass != pass2){
          alert("Las contraseñas no coinciden");
          $("#pass").val('').focus();
          $("#pass2").val('');
          enviar = false;
        }
      }





    return enviar;

  });

</script>