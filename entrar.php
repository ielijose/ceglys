<? 
  require "assets/php/setup.php";

  $action = $_POST['action'];

  if($action =='entrar'){

      $usuario = $_POST['usuario'];
      $password = $_POST['pass'];

      $query = sprintf("SELECT * FROM usuarios WHERE usuario = %s AND password = %s", 
                    GetSQLValueString($usuario, 'text'), GetSQLValueString($password, 'text'));
      $res = mysql_query($query) or die(mysql_errno().$query);
      $login = mysql_fetch_object($res);

      if($login){
        $next = $login->tipo;
          if($next == 'profesor'){
            $_SESSION['profesor'] = $login->usuario;
            $_SESSION['id_profesor'] = $login->id;
          }else if($next == 'alumno'){
            $_SESSION['alumno'] = $login->usuario;
            $_SESSION['id_alumno'] = $login->id;
          }

      }else{
        $next = "entrar.php?error=error";
      }

      header("Location: ".$next);     
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
          <? require "assets/nav.php"; ?>
          <div class="clear"></div>
    </header>
        <!-- Slider -->
        
        <!-- :Slider -->
        <!-- Content -->
          <section id="content"><div class="ic">Ceglys Afanador @ ceglysafanador.com.ve Junio, 2013!</div>
                <div class="container_12" style="margin:10px;">  
                  

                  <form action="entrar.php" method="POST" style="width:400px; margin:0 auto;" name="entrar" id="entrar">
                    <? if(isset($_GET['error'])){
                        echo "<h1 style='color:red'>Datos incorrectos</h1> <br><br>";
                    } ?>
                    <h1>Inicias Sesión</h1><hr>    
                    <table align="center" >
                     

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
                        <td colspan="3" align="center"><input type="submit" value="Entrar"></td>
                      </tr>
                    </table>
                     <input type="hidden" name="action" value="entrar"> 
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
  
  $("#entrar").submit(function(){
    var enviar = true;


    /* validar */

      var usuario = $("#usuario").val(),
          pass = $("#pass").val();

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
    return enviar;

  });

</script>