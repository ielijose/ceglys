<?php require_once "php/setup.php"; 

  $query = "SELECT n.id, n.usuario_id, u.nombre, n.evaluacion_id, e.evaluacion, n.nota
          FROM notas n
          LEFT JOIN usuarios u ON u.id = n.usuario_id
          LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
          WHERE n.usuario_id = '$id'";
  $result = mysql_query($query);
  $evaluaciones = mysql_fetch_object($result);

  if($nivel != 4){
  header("Location: index.php?ref=nivel5");
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
<script src="../assets/js/slider.js"></script><!--[if lt IE 8]>
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
    padding: 5px;
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

  table{
    border-radius: 4px;
    text-align: center;
  }

  table tr td{
        border: 1px solid #ccc;

    padding:5px;
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
              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "memoriza los pasos"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->
              <h3 align="center">PASOS  PARA LA ADMINISTRACION DE FARMACOS POR VÍA INTRAVENOSA              </h3>
              <table width="100%" border="0">
                <tr>
                  <td width="50%" align="justify">Comprobar 5 correctos.</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image001.jpg" alt="" class="img right m300">
                    <div id="player1"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Lavarse las manos.<br>
                    <br>
                  Colocarse guantes.</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image002.png" alt="" class="img right m300">
                    <div id="player2"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">
                  Elegir la zona por puncionar y descubrirla. En este caso se selecciona  la vena más palpable y la más visible. Limpiar el área.                    <p>&nbsp;</p></td>

                  <td width="50%" align="center">
                    <img src="../assets/images/image015.jpg" alt="" class="img right m300">
                    <div id="player9"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Colocar la ligadura de 5 a 8 centímetros por arriba de la vena elegida  para la punción.&nbsp;Purgar el aire de la jeringa e introducir la aguja con el bicel hacia  arriba formando un ángulo de 30 grados, después de atravesar la piel seguir el  trayecto venoso hasta puncionar la vena, aspirar para cerciorarse de que la aguja  esté dentro de ella.</td>

                  <td width="50%" align="center">
                    <img src="../assets/images/image016_1.jpg" alt="" class="img right m300">
                    <div id="player10"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify"><p>Quitar la ligadura. <br>
                    Introducir    el medicamento lentamente, observando las reacciones del paciente. </p>
                  </td>

                  <td width="50%" align="center">
                    <img src="../assets/images/image017.jpg" alt="" class="img right m300">
                    <div id="player11"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Limpia el área y colocar una torunda alcoholada en el sitio de la punción.</td>

                  <td width="50%" align="center">
                    <img src="../assets/images/image016_3.jpg" alt="" class="img right m300">
                    <div id="player12"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Desechar  la aguja y lavarse las manos.</td>

                  <td width="50%" align="center">
                    <img src="../assets/images/image008.jpg" alt="" class="img right m300">
                    <div id="player8"></div> 
                  </td>
                </tr>
                <tr>
                  <td height="61" align="center" valign="bottom"><strong>Contraindicaciones</strong></td>
                  <td align="center" valign="bottom"><strong>Indicaciones</strong></td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Esta  administración está contraindicada en casos en los que el medicamento esté  comercializado en forma oral y el paciente pueda tomarlo. Y también cuando  existan problemas en la coagulación sanguínea.</td>
                  <td width="50%" align="justify">
                  Para  la preparación es necesario comprobar si no hay alergias; comprobar la orden de  medicación; preparar la dosis correcta del fármaco; si se utiliza un vial de  más de un uso, limpiar la medrana de plástico con alcohol; desechar toda aguja  que contacte con la membrana del vial o paredes; nunca usar un medicamento  turbio, con color alterado o precipitado, a menos que las indicaciones del  fabricante expresen que el hacerlo así no es peligroso; revisar la jeringa ya  que el émbolo debe deslizarse por el tubo sin obstáculos. El manguito de la  aguja debe encajar en la jeringa a la perfección; la aguja debe estar lista y  recta; cubrir la aguja con su cubierta (después de la preparación).Desechar  correctamente los residuos (evitando contactar con aguja)</td>
                </tr>

                <tr>
                  <td colspan="2">
                  <!-- VIDEO INICIO -->
                    <div class="">
                    <?php $video = "5"; 
                    include "php/video.php";?>
                    </div>
                    <!-- VIDEO FIN -->
                  </td>
                </tr>

              </table>
            <p class="texto">
              <a href="#" class="button"> Empezar Test--> </a>
            </p>
          </article>

            <!-- 1 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">1) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "verdadero o falso"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                Se administrará medicamentos por vía intravenosa cuando se desea tratar con brevedad procesos de alta gravedad
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">2) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "lee cuidadosamente"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                La administración de fármacos intravenosa consiste en conducir medicamentos en el torrente muscular del paciente.
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <!-- 3 -->

            <article class="content-box" data-tipo="image" data-sol="5273416">
              <h3 align="left" style="display:inline-block">3) Ordene las imágenes: </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "coloca el numero"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
              </p>
              <ul id="imgtest">
                <li><img src="../assets/imgtest/4/5.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/4/2.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/4/7.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/4/3.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/4/4.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/4/1.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/4/6.png" alt=""><br><input type="text" class="imageres"></li> 

              </ul>
              <a href="#" class="button">Corregir</a>
            </article>

            <!-- 4 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">4) Seleccione la imagen correcta </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "imagen correcta"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
              </p>       
              
              <a href="#" class="button" data-res="v"><img src="../assets/imgtest/4/v.png"/></a>
              <a href="#" class="button" data-res="f"><img src="../assets/imgtest/4/f.jpg"/></a>                         
            </article>


            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">5) Verdadero o falso</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "debes leer"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
               En la administración de fármacos intravenosa se debe introducir  el medicamento rápidamente, sin observar la reaccion del paciente.                
             </p>                     
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <!-- 5 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">6) Verdadero o falso</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "verdadero o falso"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                Esta técnica se utiliza para medicamentos cuya administración por otras vías está contraindicada.              </p>
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>           
            </article>

            <article class="content-box aprovado">
              <h3 align="left" style="display:inline-block">Felicitaciones</h3>
              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "retencion de informacion"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->
              <p class="texto">
                Has aprobado este nivel, ya puedes comenzar el siguiente.       
              </p>                    
              <a href="#" class="button">Finalizar</a>                         
            </article>

            <article class="content-box reprovado">
              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "nuevamente evaluacion"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->
              <h3 align="left" style="display:inline-block">Intenta nuevamente</h3>
              <p class="texto">
                Has hecho un gran esfuerzo, pero necesitas un poco mas para aprobar este nivel.       
              </p>                    
              <a href="#" class="button">Intentar de nuevo</a>                         
            </article>




          </div>
    </section>
        <!-- Footer -->
    <?php require "../assets/footer.php"; ?>

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
        if(puntuacion>=5){
          $(".aprovado").slideDown('slow');    

          $.ajax({
            url : "php/ajax.php",
            data : {action:'nivelAprobado', nivel:'5', puntuacion:puntuacion},
            type : "POST",
            async : false,
            success : function(){
                puntuacion = -9999;
            }
          })

        }else{
          if(puntuacion!= -9999){
            $(".reprovado").slideDown('slow');          
            /*$.ajax({
              url : "php/ajax.php",
              data : {action:'nivelReprobado', nivel:'5', puntuacion:puntuacion},
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
        window.location.href = "nivel5.php?denuevo";
      });

      $(".aprovado .button").click( function(e){
        e.preventDefault();        
        window.location.href = "perfil.php?ref=finish";
      });
    });


    
    function next(){
      cajas.eq(i-1).slideUp('slow');
      cajas.eq(i).slideDown('slow');
    }
  });
  
  
</script>


<script type="text/javascript" src="../assets/mediaplayer/swfobject.js"></script>
<script type="text/javascript">
<?php for($i=1;$i<25; $i++){ ?>

  var player<?php echo $i ?> = new SWFObject('../assets/mediaplayer/mediaplayer.swf','mpl','320','20','7'); 
  player<?php echo $i ?>.addParam('allowfullscreen','true'); 
  player<?php echo $i ?>.addVariable('file','../assets/audios/<?php echo $i ?>.mp3'); 
  player<?php echo $i ?>.addVariable('height','20'); 
  player<?php echo $i ?>.addVariable('width','320'); 
  if($("#player<?php echo $i ?>").length){
    player<?php echo $i ?>.write('player<?php echo $i ?>');
  }  
<?php } ?>
</script>