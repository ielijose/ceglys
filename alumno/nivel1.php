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
  
  .content-box{
  	display:none;
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
            <article class="content-box" data-tipo="start">
              <h3 align="center">Enfermería.</h3>
              <!-- ENFERMERA INICIO -->
                  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="300">
                      <param name="movie" value="../assets/images/bienvenida.swf">
                      <param name="quality" value="high">
                      <param name="wmode" value="opaque">
                      <param name="swfversion" value="6.0.65.0">
                      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
                      <param name="expressinstall" value="../assets/scripts/expressInstall.swf">
                      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
                      <!--[if !IE]>-->
                      <object type="application/x-shockwave-flash" data="../assets/images/bienvenida.swf" width="300" height="300">
                        <!--<![endif]-->
                        <param name="quality" value="high">
                        <param name="wmode" value="opaque">
                        <param name="swfversion" value="6.0.65.0">
                        <param name="expressinstall" value="../assets/scripts/expressInstall.swf">
                        <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                        <div>
                          <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                        </div>
                        <!--[if !IE]>-->
                      </object>
                      <!--<![endif]-->
                  </object>
                  <!-- ENFERMERA FIN -->
                                  <img src="../assets/images/fea_language.jpg" class="img right m300" style="height:270px">

              <p class="texto">
                La enfermería es una profesión que se basa en conocimientos teóricos propios y posee una base científica de donde proviene el servicio que ofrece a la sociedad. 
La enfermería es la profesión que se encarga del cuidado de la salud y bienestar de la sociedad. El profesional en enfermería deberá poseer habilidades y vocación para llevar a cabo diagnósticos y tratamientos de enfermedades reales o potenciales. Así como también conocimiento de las ciencias biológicas, físicas, sociales y médicas para poder llevar a cabo el ejercicio responsable de dicha profesión. 

Se puede considerar la enfermería como:

Arte porque requiere y cuenta con un conjunto de habilidades, que depende del sello personal de quien las realice. 

Como ciencia, porque requiere de los conocimientos de la propia disciplina. 

Y como profesión, la enfermería requiere del conocimiento y apoyo de las ciencias físicas, biológicas, sociales y médicas. La enfermería como profesión requiere de un trabajo especializado, mediante la aplicación de conocimientos específicos, debe ser práctica, académica, debe incluir procedimientos uniformes basados en principios generales, debe tener bases éticas, organización interna y autonomía, de igual forma debe ser social bajo los principios establecidos por una autoridad reconocida. 

              </p>       
              
              <a href="#" class="button"> Empezar Test--> </a>
                         
            </article>



            <!-- 1 -->

            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">1) Verdadero o falso </h3>
              <p class="texto">
                El profesional en enfermería debe tener conocimiento de las ciencias biológicas, físicas, antropológicas y psicosociales médicas para poder llevar a cabo el ejercicio responsable de dicha profesión.


              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>

                         
            </article>

            <!-- 2 -->

            <article class="content-box" data-tipo="select">
              <h3>2) Se considera la enfermería como:</h3>
              <p class="texto">   
                  <ul> 
                    <li><input type="checkbox" value="1" class="ch1" />Ciencia</li>   
                    <li><input type="checkbox" value="0" class="ch1" />Tecnología</li> 
                    <li><input type="checkbox" value="1" class="ch1" />Profesión</li> 
                    <li><input type="checkbox" value="0" class="ch1" />Holganza</li> 
                    <li><input type="checkbox" value="1" class="ch1" />Arte</li> 
                  </ul>   
              </p>       
              
              <a href="#" class="button">Corregir</a>
                         
            </article>

            <!-- 3 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">3) </h3>
              <p class="texto">
                La enfermería como profesión debe tener bases éticas, organización interna y autonomía.
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>
                         
            </article>

            <!-- 4 -->

            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">4) </h3>
              <p class="texto">
                La enfermería es una profesión que se basa en conocimientos teóricos propios y posee una base en biología  </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>           
            </article>

            <!-- 5 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">5) </h3>
              <p class="texto">
                Deberá poseer habilidades y vocación para llevar a cabo tratamientos de enfermedades reales o potenciales.
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>
                         
            </article>

            <!-- 6 -->

            <article class="content-box" data-tipo="vof" data-sol="v">

              <h3 align="left" style="display:inline-block">6) </h3>
              <p class="texto">
                El profesional en enfermería debe preocuparse por el estado psicosocial del paciente       
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>
                         
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
    <? require "../assets/footer.php"; ?>

  </div>
</div>
</body>
</html>

<script>
	$(document).ready(function(){
		cajas = $(".content-box");
		i = 0;
		puntuacion=0;
		preguntas=6;
		
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
			}

      if(i<=preguntas){
        next();  
      }else{
        cajas.eq(preguntas).slideUp('slow');
        if(puntuacion>=5){
          $(".aprovado").slideDown('slow');    

          $.ajax({
            url : "php/ajax.php",
            data : {action:'nivelAprobado', nivel:'1', puntuacion:puntuacion},
            type : "POST",
            async : false,
            success : function(){

            }
          })

        }else{
          $(".reprovado").slideDown('slow');
        }
      }

      $(".reprovado .button").click(function(e){
        e.preventDefault();
        window.location.href = "nivel1.php?denuevo";
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