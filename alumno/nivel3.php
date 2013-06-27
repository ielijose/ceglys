<? require_once "php/setup.php"; 

  $query = "SELECT n.id, n.usuario_id, u.nombre, n.evaluacion_id, e.evaluacion, n.nota
          FROM notas n
          LEFT JOIN usuarios u ON u.id = n.usuario_id
          LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
          WHERE n.usuario_id = '$id'";
  $result = mysql_query($query);
  $evaluaciones = mysql_fetch_object($result);
if($nivel != 2){
  header("Location: index.php?ref=nivel3");
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
          <? require "php/nav.php"; ?>
          <div class="clear"></div>
    </header>
        
        <!-- Content -->
    <section id="content"><div class="ic">Ceglys Afanador @ ceglysafanador.com.ve Junio, 2013!</div>
          <div class="container_12">
            <article class="content-box" data-tipo="start">
            
              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "analisa la inf"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->
              <h3 align="center">Administración de farmacos via intramuscular en el área del brazo.</h3>
              </p>
              </p>
              </p>
              <p>Debido a la  pequeña masa muscular de la zona del brazo evita la administración de  cantidades superiores a 2 ml de medicación. Está tan cerca del nervio radial  como de la arteria humeral profunda, por lo que existe la posibilidad de  lesionar al paciente. Esta es una buena zona, sin embargo, para la dosis de  refuerzo del toxoide tetánico, puesto que es accesible a los pacientes  ambulatorios. Además la medicación administrada en el deltoides se absorbe más  rápidamente.</p>
              <table width="100%" border="0">
                <tr>
                  <td colspan="2" align="center"><h4>PASOS  PARA LA ADMINISTRACION DE FARMACOS EN EL BRAZO: </h4></td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Compruebe  5 correctos e informe el procedimiento al paciente.</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image001.jpg" alt="" class="img right m300">
                    <div id="player1"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">  Lávese la manos</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image008.jpg" alt="" class="img right m300">
                    <div id="player2"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify"><p>*Haga un cuadro imaginario en la parte superior de su brazo.<br><br>
                        *Encuentre la parte superior de su brazo que tiene una    protuberancia, donde se une con el hombro. Mida 2 dedos de ancho hacia abajo    de esta área del hueso. Aquí se encuentra la parte superior del cuadro    imaginario.<br><br>
                        *Encuentre la parte de abajo del cuadro dibujando una línea horizontal imaginaria en su brazo, desde el pliegue frontal de su axila hasta el pliegue posterior de su axila.<br><br>
                        *Encuentre los marcos de los  lados dividiendo el área en tres partes verticales. La parte del medio es donde  se inyectará la medicina.</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image003.png" alt="" class="img right m300">
                    <div id="player3"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Limpie  el sitio, Presionándolo con el aplicador de alcohol; déjelo secar.</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image004.jpg" alt="" class="img right m300">
                    <div id="player4"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify"><p>Con sus dedos pulgar e índice, sostenga firmemente el músculo. <br><br>
                        Coja la jeringa como se coge un lápiz e inserte rápidamente la    aguja a través de la piel en un ángulo     de 90 grados.</p>
                  </td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image009.png" alt="" class="img right m300">
                    <div id="player5"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify"><p>Succione suavemente con el émbolo para ver si sale sangre. Si    sale sangre, saque la aguja, deséchela junto con la jeringa, y empiece    nuevamente.<br><br>
                   
Si la medicina en la  jeringa no tiene sangre, inyecte toda la medicina lentamente en el tejido.</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image006.png" alt="" class="img right m300">
                    <div id="player6"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Después  de retirar la aguja, aplique un poco de presión sobre el sitio con una gasa  seca o un pañuelo de papel (kleenex), hasta que ya no sangre más.</td>
                  <td width="50%" align="center">
                    <img src="../assets/images/image007.png" alt="" class="img right m300">
                    <div id="player7"></div> 
                  </td>
                </tr>
                <tr>
                  <td width="50%" align="justify">Lávese  bien las manos otra vez. Y deseche la aguja debidamente.</td>
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
                  <td width="50%" align="justify">Las  personas con trastornos de la coagulación o en tratamiento con anticoagulantes  pueden desarrollar hematomas en el lugar de la inyección, por lo que se informará  al paciente sobre este riesgo. Estos supuestos no contradicen la vacunación y,  en el caso, de precisar una vacuna cuya única vía es la intramuscular, se  utilizará una aguja fina (calibre igual o menor a 23 G) y se aplicará presión  local sin frotar durante al menos dos minutos.</td>
                  <td width="50%" align="justify">Admite hasta 2 ml de volumen.<br>
                  El paciente puede estar prácticamente en todas  las posiciones: sedestación (sentado), decúbito supino, decúbito lateral o  bipedestación.</td>
                </tr>

                <tr>
                  <td colspan="2">
                  <!-- VIDEO INICIO -->
                    <div class="">
                    <? $video = "3"; 
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
              <? $enfermera = "verdadero o falso"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
               Al realizar la administración de farmacos en el glúteo, se esta tan cerca del nervio radial como de la arteria humeral profunda, por lo que no  existe ninguna posibilidad de lesionar al paciente.
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">2) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "lee cuidadosamente"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                Las personas con trastornos de la coagulación o en tratamiento con anticoagulantes pueden desarrollar hematomas en el lugar de la inyección.              
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>


            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">3) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "debes leer"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                Si la medicina en la jeringa tiene sangre, se debe inyecte toda la medicina lentamente en el tejido.              
              </p>                     
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>

            <!-- 3 -->

            <article class="content-box" data-tipo="select">
              <h3>4) El paciente puede puede estar en 3 de estas posiciones para poder aplicarle la inyección en el brazo:</h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "3 palabras correctas"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


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

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "coloca el numero"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
              </p>
               </p>
               </p>
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
              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "retencion de informacion"; 
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
              <? $enfermera = "nuevamente evaluacion"; 
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
          if(puntuacion!= -9999){
            $(".reprovado").slideDown('slow');          
           /* $.ajax({
              url : "php/ajax.php",
              data : {action:'nivelReprobado', nivel:'3', puntuacion:puntuacion},
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
        window.location.href = "nivel3.php?denuevo";
      });

      $(".aprovado .button").click( function(e){
        e.preventDefault();        
        window.location.href = "e2.php";
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
<? for($i=1;$i<25; $i++){ ?>

  var player<? echo $i ?> = new SWFObject('../assets/mediaplayer/mediaplayer.swf','mpl','320','20','7'); 
  player<? echo $i ?>.addParam('allowfullscreen','true'); 
  player<? echo $i ?>.addVariable('file','../assets/audios/<? echo $i ?>.mp3'); 
  player<? echo $i ?>.addVariable('height','20'); 
  player<? echo $i ?>.addVariable('width','320'); 
  if($("#player<? echo $i ?>").length){
    player<? echo $i ?>.write('player<? echo $i ?>');
  }  
<? } ?>
</script>

