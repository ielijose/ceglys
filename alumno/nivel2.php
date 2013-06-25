<? require_once "php/setup.php"; 

  $query = "SELECT n.id, n.usuario_id, u.nombre, n.evaluacion_id, e.evaluacion, n.nota
          FROM notas n
          LEFT JOIN usuarios u ON u.id = n.usuario_id
          LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
          WHERE n.usuario_id = '$id'";
  $result = mysql_query($query);
  $evaluaciones = mysql_fetch_object($result);

if($nivel != 1){
  header("Location: index.php?ref=nivel2");
  exit;
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
    max-height: 150px;
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
          <? require "php/nav.php"; ?>
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


    <!-- VIDEO INICIO -->
    <div class="enfermera">
    <? $video = "ab"; 
    include "php/video.php";?>
    </div>
    <!-- VIDEO FIN -->



              </p>       
              
              <a href="#" class="button"> Empezar Test--> </a>
                         
            </article>



            <!-- 1 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">1) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->

              <p class="texto">
                Un fármaco actúa como determinados sistemas orgánicos modificando su comportamiento.
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">2) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                La administración de medicamentos son actividades de enfermería que se realizan sin necesidad de prescripción médica              
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <!-- 3 -->

            <article class="content-box" data-tipo="select">
              <h3>3) •  Un fármaco es utilizado en …… y cura de una enfermedad:</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">   
                  <ul> 
                    <li><input type="checkbox" value="1" class="ch1" />La Prevención</li>   
                    <li><input type="checkbox" value="1" class="ch1" />El Diagnóstico </li> 
                    <li><input type="checkbox" value="0" class="ch1" />El impulso </li> 
                    <li><input type="checkbox" value="1" class="ch1" />La mitigación</li> 
                    <li><input type="checkbox" value="0" class="ch1" />Preparación</li> 
                  </ul>   
              </p>       
              
              <a href="#" class="button">Corregir</a>
                         
            </article>

            <!-- 4 -->

            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">4) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                  Los aspectos legales que involucran una mala práctica de la administración de medicamentos no le competen al profesional de enfermería.              
                </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>
                         
            </article>

            <!-- 5 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">5) Verdadero o falso</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                Un fármaco es utilizado para evitar la aparición de un proceso fisiológico no deseado
              </p>
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>           
            </article>

            <article class="content-box" data-tipo="image" data-sol="45312">
              <h3 align="left" style="display:inline-block">6) indica cual es el orden de los 5 correctos. </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
              </p>
              <ul id="imgtest">
                <li><img src="../assets/imgtest/4.jpg" alt=""><br><input type="text" class="imageres" data-n="4"></li>
                <li><img src="../assets/imgtest/5.jpg" alt=""><br><input type="text" class="imageres" data-n="5"></li>
                <li><img src="../assets/imgtest/3.jpg" alt=""><br><input type="text" class="imageres" data-n="3"></li>
                <li><img src="../assets/imgtest/1.jpg" alt=""><br><input type="text" class="imageres" data-n="1"></li>
                <li><img src="../assets/imgtest/2.jpg" alt=""><br><input type="text" class="imageres" data-n="2"></li>
              </ul>
              <a href="#" class="button">Corregir</a>
            </article>


            <!-- 6 -->

            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">7) Verdadero o falso</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                El enfermero debe asegurarse que la medicación este siendo suministrada antes y después del horario.              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>
                         
            </article>

            <!-- 8 -->

            <article class="content-box" data-tipo="vof" data-sol="v">

              <h3 align="left" style="display:inline-block">8) Verdadero o falso</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                  Los cinco correctos para la administración de medicamentos, permiten seguir algunas precauciones estándares, para evitar o minimizar al máximo la posibilidad de un error.       
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>
                         
            </article>


            <article class="content-box aprovado">
              <h3 align="left" style="display:inline-block">Felicitaciones</h3>
              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->
              <p class="texto">
                Has aprovado este nivel, ya puedes comenzar el siguiente.       
              </p>                    
              <a href="#" class="button">Finalizar</a>                         
            </article>

            <article class="content-box reprovado">
              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->
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
		preguntas=8;
		
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
        if(puntuacion>=7){
          $(".aprovado").slideDown('slow');    

          $.ajax({
            url : "php/ajax.php",
            data : {action:'nivelAprobado', nivel:'2', puntuacion:puntuacion},
            type : "POST",
            async : false,
            success : function(){
                puntuacion = -9999;
            }
          })

        }else{
          if(puntuacion!= -9999){
            $(".reprovado").slideDown('slow');
           /* $.ajax({
              url : "php/ajax.php",
              data : {action:'nivelReprobado', nivel:'2', puntuacion:puntuacion},
              type : "POST",
              async : false,
              success : function(){

              }
            });*/
          }
        }
      }

      $(".reprovado .button").click(function(e){
        e.preventDefault();
        window.location.href = "nivel2.php?denuevo";
      });

      $(".aprovado .button").click( function(e){
        e.preventDefault();        
        window.location.href = "index.php?goto=2";
      });
			
		});


		
		function next(){
			cajas.eq(i-1).slideUp('slow');
			cajas.eq(i).slideDown('slow');
		}

var chmax = 3, currentch = 0;
$('.ch1').click(function(){
  if($(this).is(":checked")){
    if(currentch<chmax){
      currentch++;
    }else{
      $(this).attr('checked', false);
      alert("Solo puede elegir 3 opciones.");
    }
  }else{
    currentch--;
  }
});
	});
	
	
</script>