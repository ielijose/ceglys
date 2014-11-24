<?php require_once "php/setup.php"; 

  $query = "SELECT n.id, n.usuario_id, u.nombre, n.evaluacion_id, e.evaluacion, n.nota
          FROM notas n
          LEFT JOIN usuarios u ON u.id = n.usuario_id
          LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
          WHERE n.usuario_id = '$id'";
  $result = mysql_query($query);
  $evaluaciones = mysql_fetch_object($result);

  if($nivel != 5){
  header("Location: index.php?ref=nivel6");
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
    text-align: justify;
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
              <?php $enfermera = "analisa la inf"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->
              <h3 align="center">Heridas Abierta</h3>
              <p class="texto">
                Una herida es una lesión que se produce en el cuerpo. Puede ser producida por múltiples razones, aunque generalmente es debido a golpes o desgarros en lapiel. Dependiendo de su gravedad, es necesaria asistencia médica.<br>
Es toda pérdida de continuidad en la piel (lo que se denomina "solución de continuidad"), secundaria a un traumatismo. Como consecuencia de la agresión de este tejido existe riesgo de infección y posibilidad de lesiones en órganos o tejidos adyacentes: músculos, nervios, vasos sanguíneos, entre otros.<br>
 <br>
<strong>Al tratar una herida se busca</strong> <br>
Favorecer el proceso de granulación y cicatrización. <br>
Prevenir la infección.  <br>
Promover el bienestar del paciente.  <br>
Valorar el proceso de curación.  <br>
</p>
              <table width="100%" border="0">
                <tr>
                  <td width="50%">Identificar al paciente, Informarle sobre el procedimiento a realizar, Preservar la intimidad del paciente. </td>
                  <td width="50%" align="center">
                    <img src="../assets/images/h1.jpg" alt="" class="img right m300">
                    <div id="player18"></div> 
                  </td>
                </tr>

                <tr>
                  <td width="50%">Lavarse las manos</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/h2.jpg" alt="" class="img right m300">
                    <div id="player2"></div> 
                  </td>
                </tr>

                <tr>
                  <td width="50%"> Preparar el campo estéril, en una bandeja del carro de curas o en una mesa auxiliar. 
<br>Abrir el paquete de gasas y el equipo de curas, siguiendo una técnica aséptica y depositarlos en el campo estéril. 
 </td>

                  <td width="50%" align="center">
                    <img src="../assets/images/h3.jpg" alt="" class="img right m300">
                    <div id="player19"></div> 
                  </td>
                </tr>

                <tr>
                  <td width="50%"> Ponerse los guantes estériles o no estériles, según el tipo de herida. 
<br>Retirar suavemente el apósito sucio, utilizando guantes no estériles, humedeciéndolo con suero fisiológico si fuera necesario.
 </td>
                  <td width="50%" align="center">
                    <img src="../assets/images/h4.jpg" alt="" class="img right m300">
                    <div id="player20"></div> 
                  </td>
                </tr>

                <tr>
                  <td width="50%">  Limpiar la herida, partiendo del centro al exterior, con jabón o líquido antiséptico.  </td>

                  <td width="50%" align="center">
                    <img src="../assets/images/h5.jpg" alt="" class="img right m300">
                    <div id="player21"></div> 
                  </td>
                </tr>

                <tr>
                  <td width="50%"> Con una pinza de disección y una de Köcher, doblar una gasa en cuatro, de forma que los extremos queden hacia dentro.  </td>

                  <td width="50%" align="center">
                    <img src="../assets/images/h6.jpg" alt="" class="img right m300">
                    <div id="player22"></div> 
                  </td>
                </tr>

                <tr>
                  <td width="50%"> Colocar apósito o vendaje compresivo. </td>

                  <td width="50%" align="center">
                    <img src="../assets/images/h7.jpg" alt="" class="img right m300">
                    <div id="player23"></div> 
                  </td>
                </tr>

                <tr>
                  <td width="50%"> Deseche el material utilizado en el bote de basura y lávese nuevamente las manos como se le indico.
                </td>

                  <td width="50%" align="center">
                    <img src="../assets/images/h8.jpg" alt="" class="img right m300">
                    <div id="player8"></div> 
                  </td>
                </tr>
                

                <tr>
                  <td colspan="2">
                  <!-- VIDEO INICIO -->
                    <div class="">
                    <?php $video = "6"; 
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

            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">1) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "verdadero o falso"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
El objeto principal de la cura de heridas abiertas es promover la infección en el área.
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <!-- 2 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">2) Seleccione la imagen correcta </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "imagen correcta"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->

              <p class="texto">
              </p>       
              
              <a href="#" class="button" data-res="v"><img src="../assets/imgtest/5/v.jpg"/></a>
              <a href="#" class="button" data-res="f"><img src="../assets/imgtest/5/f.jpg"/></a>                         
            </article>


            <!-- 3 -->

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">3) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "lee cuidadosamente"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
  Como consecuencia de la agresión de la piel existe riesgo de infección y posibilidad de lesiones en órganos o tejidos adyacentes: músculos, nervios, vasos sanguíneos, entre otros.              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

          <!-- 4 -->


            <article class="content-box" data-tipo="image" data-sol="2413756">
              <h3 align="left" style="display:inline-block">4) Ordene las imágenes: </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "coloca el numero"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
              </p>
              <ul id="imgtest">
                <li><img src="../assets/imgtest/5/2.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/5/4.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/5/1.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/5/3.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/5/7.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/5/5.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/5/6.jpg" alt=""><br><input type="text" class="imageres"></li> 
                <li><img src="../assets/imgtest/5/8.jpg" alt=""><br><input type="text" class="imageres"></li> 

              </ul>
              <a href="#" class="button">Corregir</a>
            </article>

            <!-- 5 -->
            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">5) Verdadero o falso</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "debes leer"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                Para cubrir una herida abierta se debe doblar una gasa en cuatro con las manos sin guantes, de forma que los extremos queden hacia dentro.              </p>                     
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>



             <article class="content-box" data-tipo="select">
              <h3>6) Para curar una herida abierta se requiere de materiales como:</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "3 palabras correctas"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">   
                  <ul> 
                    <li><input type="checkbox" value="1" class="ch1" />Apósitos</li>   
                    <li><input type="checkbox" value="1" class="ch1" />Antisépticos</li> 
                    <li><input type="checkbox" value="0" class="ch1" />Catéter</li> 
                    <li><input type="checkbox" value="1" class="ch1" />Guantes</li> 
                    <li><input type="checkbox" value="0" class="ch1" />Antimicóticos</li> 
                  </ul>   
              </p>       
              
              <a href="#" class="button">Corregir</a>
                         
            </article>


            

            <article class="content-box aprovado">
              <h3 align="left" style="display:inline-block">Felicitaciones</h3>
              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <?php $enfermera = "muy bien"; 
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
            data : {action:'nivelAprobado', nivel:'6', puntuacion:puntuacion, "rand": Math.floor(Math.random() * 6) + 1 },
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
              data : {action:'nivelReprobado', nivel:'6', puntuacion:puntuacion},
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
        window.location.href = "nivel6.php?denuevo";
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