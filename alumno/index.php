<?php require_once "php/setup.php"; 

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
          <?php $p=1; require "php/nav.php"; ?>
          <div class="clear"></div>
    </header>
        <!-- Slider -->
        <div class="mp-slider">
          <ul class="items">
            <li><img src="../assets/images/slide-1.jpg" alt="" />
              <div class="banner">
                <span class="row-2">
                  <b>Tutor</b>
                </span>
                <span class="row-3">Interactivo<b></b>
                </span>
              </div>
            </li>
            <li>
              <img src="../assets/images/slide-2.jpg" alt="" />
              <div class="banner">
                <span class="row-1">
                  <b>Practicas</b> Basicas
                </span>
                <span class="row-2">de Enfermeria <b></b></span>
              </div>
            </li>
            <li><img src="../assets/images/slide-3.jpg" alt="" />
              <div class="banner">
                <span class="row-1"><b>I.U.T</b> Juan Pablo</span>
                <span class="row-2">Perez Alfonzo</span>
              </div>
            </li>
          </ul>
          <a href="#" class="mp-prev"></a> <a href="#" class="mp-next"></a> 
        </div>
        <!-- :Slider -->
        <!-- Content -->
    <section id="content"><div class="ic">Ceglys Afanador @ ceglysafanador.com.ve Junio, 2013!</div>
          <div class="container_12">
            <article class="content-box">
              <table width="100%" border="0" align="center">
              <tr>
                <?php if($gruponivel>=1){ $link = "e1.php";}else{$link = "#no";} ?>
                <td align="right">
                  <div class="col-1" id="login-form">
                    <figure class="img-box">
                      <div align="center">
                        <img src="../assets/images/farmacos.png" alt="" width="184" height="171">
                      </div>
                    </figure>
                    <a href="<?php  echo $link; ?>">
                      <h5>Administración de farmacos </h5>
                    </a>
                  </div>
                </td>


                <td align="right" colspace="2">
                  <!-- ENFERMERA INICIO -->
                  <div class="enfermera">
                  <?php $enfermera = "selecciona"; 
                     include "php/enfermera.php";?>
                  </div>
                  <!-- ENFERMERA FIN -->

               </td> 

            </tr>
            <tr>
            
            <?php if($gruponivel>=2){ $link = "e2.php";}else{$link = "#no";} ?>

              <td>
                <div class="col-1" id="login-form">
                  <figure class="img-box">
                    <div align="center">
                      <img src="../assets/images/intramuscular.png" alt="" width="171" height="171">
                    </div>
                  </figure>
                  <a href="<?php  echo $link; ?>">
                    <h5 align="left">AdministraciÓn de farmacos POR vÍa intramuscular.</h5>
                  </a>
                </div>
              </td>

              <?php if($nivel==4){ $link = "nivel5.php";}else{$link = "#no";} ?>

              <td>
                <div class="col-1" id="login-form">
                  <figure class="img-box">
                    <div align="center">
                      <img src="../assets/images/intravenosa.png" alt="" width="191" height="169">
                    </div>
                  </figure>
                  <a href="<?php  echo $link; ?>">
                    <h5 align="left">AdministraciÓn de farmacos POR vÍa  intravenosa</h5>
                  </a>
                </div>
              </td>  

              <?php if($nivel==5){ $link = "nivel6.php";}else{$link = "#no";} ?>

              <td>
                <div class="col-1" id="login-form">
                  <figure class="img-box">
                    <div align="center">
                      <img src="../assets/images/heridas.png" alt="" width="191" height="169">
                    </div>
                  </figure>
                  <a href="<?php  echo $link; ?>">
                    <h5 align="left">Heridas abiertas</h5>
                  </a>
                </div>
              </td>               
                
              </tr>
              </table>              
            </article>
          </div>
    </section>
        <!-- Footer -->
    <?php require "../assets/footer.php"; ?>

  </div>
</div>
</body>
</html>