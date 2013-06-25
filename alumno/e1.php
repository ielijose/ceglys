<? require_once "php/setup.php"; 

  $query = "SELECT n.id, n.usuario_id, u.nombre, n.evaluacion_id, e.evaluacion, n.nota
          FROM notas n
          LEFT JOIN usuarios u ON u.id = n.usuario_id
          LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
          WHERE n.usuario_id = '$id'";
  $result = mysql_query($query);
  $evaluaciones = mysql_fetch_object($result);

  


?>
<!DOCTYPE html>
<html lang="es">
<head>
  	<title>Tutor Interactivo para practicas basicas de enfermeria</title>
  	<meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Ceglys Afanador Leon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/jquery-1.7.1.min.js"></script>
    <script src="../assets/js/superfish.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>
    <script src="../assets/js/tms-0.4.1.js"></script>
<script src="../assets/js/slider.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/../assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="../assets/js/html5.js"></script>
	<link rel="stylesheet" href="../assets/css/ie.css"> 
<![endif]-->

  <style>
  img.desaturate { filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    filter: grayscale(100%);
  }
  </style>
</head>
<body>
<div class="main-indents">
  <div class="main">
        <!-- Header -->
    <header>
          <? require "php/nav.php"; ?>
          <div class="clear"></div>
    </header>
        
        <!-- Content -->
    <section id="content"><div class="ic">Ceglys Afanador @ ceglysafanador.com.ve Junio, 2013!</div>
          <div class="container_12">
            <article class="content-box">
              <table width="100%" border="0" align="center">
              <tr>
                <td align="center" colspan="2">
                  <!-- ENFERMERA INICIO -->
                  <? 
                      $enfermera = "bienvenida"; 
                      include "php/enfermera.php";  
                  ?>
                  <!-- ENFERMERA FIN -->

               </td> 

            </tr>
            <tr>
            
            <? if($nivel==0){ $link = "nivel1.php";}else{$link = "#no";} ?>

              <td align="center">
                <div class="col-1" id="login-form">
                  <figure class="img-box">
                    <div align="center">
                      <img src="../assets/images/1a.png" alt="" width="171" height="171">
                    </div>
                  </figure>
                  <a href="<?  echo $link; ?>">
                    <h5 align="center">Enfermería.</h5>
                  </a>
                </div>
              </td>

              <? if($nivel==1){ $link = "nivel2.php";}else{$link = "#no";} ?>

              <td align="center">
                <div class="col-1" id="login-form">
                  <figure class="img-box">
                    <div align="center">
                      <img src="../assets/images/1b.png" alt="" width="191" height="169">
                    </div>
                  </figure>
                  <a href="<?  echo $link; ?>">
                    <h5 align="center">Administración de farmacos</h5>
                  </a>
                </div>
              </td>               
                
              </tr>
              </table>              
            </article>
          </div>
    </section>
        <!-- Footer -->
    <? require "../assets/footer.php"; ?>

  </div>
</div>
</body>
</html>