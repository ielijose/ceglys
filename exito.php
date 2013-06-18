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
                <div class="container_12" style="margin:10px auto; width 100%;">  

              <? if(isset($_GET['ref']) && ($_GET['ref']=='docente')){ ?>  
                  <div style="width:400px; margin:0 auto;">
                    <h1>Registro Exitoso</h1><hr>                        
                  </div> 
              <? }?>          
                  
                  
                </div>
          </section>
        <!-- Footer -->
    <? require "assets/footer.php"; ?>

  </div>
</div>
</body>
</html>

