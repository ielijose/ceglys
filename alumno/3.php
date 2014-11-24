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
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

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
  
  .content-box{
  	display:none;
  }
  #imgtest li{
    display: inline-block;
  }
  #imgtest li img{
    max-height: 200px;
  }
  #imgtest li input{
    width: 40px;
    height: 40px;
    font-size: 30px;
    text-align: center;
  }
  #imgtest li {
    text-align: center;
  }
  </style>
</head>
<body>
<div class="main-indents">
  <div class="main">
        <!-- Header -->
    <header>
          <?php require "php/nav.php"; ?>
          <div class="clear"></div>
    </header>
        
        <!-- Content -->
    <section id="content"><div class="ic">Ceglys Afanador @ ceglysafanador.com.ve Junio, 2013!</div>
          <div class="container_12">

            <article class="content-box" data-tipo="start">
              <h3 align="center">Administración de farmacos.</h3>
              <p class="texto">
                
                <h3>Definición de Fármaco: </h3>
                <img src="../assets/images/farmaco.jpg" class="img right m300">

 Un fármaco es una sustancia química que actúa como determinados sistemas orgánicos del organismo, modificando su comportamiento.

Un fármaco es utilizado en la prevención, diagnóstico, tratamiento, mitigación y cura de una enfermedad, para evitar la aparición de un proceso fisiológico no deseado o bien para modificar condiciones fisiológicas con fines específicos.

<br><br>
<h3>Administración de Fármacos: </h3>
La administración de medicamentos son actividades de enfermería que se realizan bajo prescripción médica, en las cuales el enfermero debe enfocarse a reafirmar los conocimientos y aptitudes necesarias para aplicar un fármaco al paciente, asimismo, saber evaluar los factores fisiológicos, mecanismos de acción y las variables individuales que afectan la acción de las drogas, los diversos tipos de prescripciones y vías de administración, así como los aspectos legales que involucran una mala práctica de la administración de medicamentos.
                <img src="../assets/images/adm-farmaco.jpg" class="img right m300">

 La administración de un fármaco es una función delegada de órdenes médicas. Que debe realizarse siempre con previa orden escrita.
Antes de realizar la administración de fármacos se deben revisar los 5 correctos presentados a continuación:
Los cinco correctos para la administración de medicamentos, le permiten al personal enfermero que va a administrar una medicación, seguir algunas precauciones estándares, para evitar o minimizar al máximo la posibilidad de un error al utilizarlos el enfermero se asegura de cumplir algunas pautas para la administración que ya están prestablecidas y que lo guían para un mejor proceder.

<br><br>
<strong>Video</strong><br>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="480" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high">
  <param name="wmode" value="opaque">
  <param name="scale" value="noscale">
  <param name="salign" value="lt">
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_3&amp;streamName=../assets/videos/ab&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0">
  <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
  <param name="expressinstall" value="Scripts/expressInstall.swf">
  <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="480">
    <!--<![endif]-->
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="scale" value="noscale">
    <param name="salign" value="lt">
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_3&amp;streamName=../assets/videos/ab&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0">
    <param name="expressinstall" value="Scripts/expressInstall.swf">
    <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
    <div>
      <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
              </p>       
              
              <a href="#" class="button"> Empezar Test--> </a>
                         
            </article>



            <!-- 1 -->

            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">1) Verdadero o falso </h3>
              <p class="texto">
               Está tan cerca del nervio radial como de la arteria humeral profunda, por lo que no  existe ninguna posibilidad de lesionar al paciente.
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">2) Verdadero o falso </h3>
              <p class="texto">
                Las personas con trastornos de la coagulación o en tratamiento con anticoagulantes pueden desarrollar hematomas en el lugar de la inyección.              
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>


            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">3) Verdadero o falso </h3>
              <p class="texto">
                Si la medicina en la jeringa tiene sangre, se debe inyecte toda la medicina lentamente en el tejido.              
              </p>                     
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <!-- 3 -->

            <article class="content-box" data-tipo="select">
              <h3>4) El paciente puede puede estar en 3 de estas posiciones para poder aplicarle la inyección en el brazo:</h3>
              <p class="texto">   
                  <ul> 
                    <li><input type="checkbox" value="1" class="ch1" />Sentado</li>   
                    <li><input type="checkbox" value="0" class="ch1" />De Cuclillas</li> 
                    <li><input type="checkbox" value="1" class="ch1" />De Cubito</li> 
                    <li><input type="checkbox" value="0" class="ch1" />Parado de manos</li> 
                    <li><input type="checkbox" value="1" class="ch1" />Supino</li> 
                  </ul>   
              </p>       
              
              <a href="#" class="button">Corregir</a>
                         
            </article>


            <article class="content-box" data-tipo="image" data-sol="58421367">
              <h3 align="left" style="display:inline-block">5) Ordene las imágenes: </h3>
              <p class="texto">
              </p>
              <ul id="imgtest">
                <li><img src="../assets/imgtest/2/5.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/2/8.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/2/4.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/2/2.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/2/1.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/2/3.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/2/6.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/2/7.png" alt=""><br><input type="text" class="imageres"></li>

              </ul>
              <a href="#" class="button">Corregir</a>
            </article>

            


            <article class="content-box aprovado">

              <h3 align="left" style="display:inline-block">Felicitaciones</h3>
              <p class="texto">
                Has aprovado este nivel, ya puedes comenzar el siguiente.       
              </p>      
              
              <a href="#" class="button">Finalizar</a>
                         
            </article>

             <article class="content-box reprovado">

              <h3 align="left" style="display:inline-block">Intenta nuevamente</h3>
              <p class="texto">
                Has hecho un gran esfuerzo, pero necesitas un poco mas para aprovar este nivel.       
              </p>      
              
              <a href="#" class="button">Intentar de nuevo</a>
                         
            </article>




          </div>
    </section>
        <!-- Footer -->
    <?php require "../assets/footer.php"; ?>

  </div>
</div>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>
</body>
</html>

<script>
	$(document).ready(function(){
		cajas = $(".content-box");
		i = 0;
		puntuacion=0;
		preguntas=5;
		
		cajas.eq(i).slideDown('slow');
		
		$(".button").click(function(){
			i++;
			var tipo = $(this).parent('.content-box').data('tipo');
			
			switch(tipo){
				case 'vof':
					var sol = $(this).parent('.content-box').data('sol'),
						res = $(this).data('res');						
						if(sol===res)
							puntuacion++;											
					break;
				case 'select':
					var checks = $('.ch1'), resultado = true;					
						checks.each(function(i, index){
              ed = $(this).is(":checked");
							value = $(this).val();
              if(value != ed){resultado=false;}             
						});
            if(resultado)
              puntuacion++;            
					break;
        case 'image':
          var sol = $(this).parent('.content-box').data('sol');
          var  reply = "";

          $('.imageres').each(function(i, j){
            reply+=$(this).val();
          });
          if(reply==sol){
            puntuacion++; 
          }
          break;
			}

      if(i<=preguntas){
        next();  
      }else{
        cajas.eq(preguntas).slideUp('slow');
        if(puntuacion>=4){
          $(".aprovado").slideDown('slow');    

          $.ajax({
            url : "php/ajax.php",
            data : {action:'nivelAprobado', nivel:'3', puntuacion:puntuacion},
            type : "POST",
            async : false,
            success : function(){
                puntuacion = -9999;
            }
          })

        }else{
          $(".reprovado").slideDown('slow');
          if(puntuacion!= -9999){
            $.ajax({
              url : "php/ajax.php",
              data : {action:'nivelReprobado', nivel:'3', puntuacion:puntuacion},
              type : "POST",
              async : false,
              success : function(){

              }
            });
          }
        }
      }

      $(".reprovado .button").click(function(e){
        e.preventDefault();
        window.location.href = "nivel2.php?denuevo";
      });

      $(".aprovado .button").click( function(e){
        e.preventDefault();        
        window.location.href = "e1.php";
      });
			
		});


		
		function next(){
			cajas.eq(i-1).slideUp('slow');
			cajas.eq(i).slideDown('slow');
		}
	});
	
	
</script>