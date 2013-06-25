<? require_once "php/setup.php"; 

  $query = "SELECT n.id, n.usuario_id, u.nombre, n.evaluacion_id, e.evaluacion, n.nota
          FROM notas n
          LEFT JOIN usuarios u ON u.id = n.usuario_id
          LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
          WHERE n.usuario_id = '$id'";
  $result = mysql_query($query);
  $evaluaciones = mysql_fetch_object($result);
if($nivel != 3){
  header("Location: index.php?ref=nivel4");
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
    max-height: 135px;
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
              <h3 align="center">Administración de farmacos via intramuscular en el área del gluteo.</h3>
              <p>El sitio recomendado es el cuadrante superior externo del área glútea (unos 5 u 8 cm por debajo de la cresta ilíaca) y puede localizarse trazando una línea desde la espina ilíaca postero-superior hasta el trocánter mayor del fémur. Cualquier inyección aplicada por fuera y por encima de esta línea se encontrará a cierta distancia del nervio ciático.</p>
              <table width="100%" border="0">
                <tr>
                  <td colspan="2" align="center"><h4>PASOS  PARA LA ADMINISTRACION DE FARMACOS EN EL GLUTEO: </h4></td>
                </tr>
                <tr>
                  <td width="53%">Compruebe  5 correctos e informe el procedimiento al paciente.</td>
                  <td width="47%"><img src="../assets/images/image001.jpg" alt="" class="img right m300"></td>
                </tr>
                <tr>
                  <td align="left">  Lávese la manos</td>
                  <td><img src="../assets/images/image002.png" width="291" height="251"></td>
                </tr>
                <tr>
                  <td align="left">- Elija sitio de punción dividiendo la nalga en 4 cuadrantes imaginarios. La línea vertical se extiende desde la creta ilíaca hasta el pliegue medio, hasta la parte lateral de la nalga. Localizar la parte superior externa del cuadrante superior externo. Es importante palpar la cresta ilíaca para que la zona está lo suficientemente alta. Los cálculos visuales sólo pueden dar como resultado una inyección que sea demasiado baja y lesión del paciente.</td>
                  <td><img src="../assets/images/glut1.png"  height="300"></td>
                </tr>

                <tr>
                  <td align="left">Realice asepsia de la piel con tórula de alcohol ( solo si no es una vacuna lo que se va a administrar, ya que en este caso no se debe realizar asepsia previa, debido a que el alcohol puede inactivar el producto)</td>
                  <td><img src="../assets/images/glut2.png" height="300" alt=""></td>
                </tr>

                <tr>
                  <td align="left">Con una mano estire la piel en la zona elegida. Inserte la aguja en ángulo de 90º con un movimiento rápido y seguro</td>
                  <td><img src="../assets/images/glut3.jpg" height="300" alt=""></td>
                </tr>

                <tr>
                  <td align="left">Aspire la jeringa y asegúrese que no refluya sangre </td>
                  <td><img src="../assets/images/glut4.jpg" height="300" alt=""></td>
                </tr>

                <tr>
                  <td align="left">inyecte lentamente la solución</td>
                  <td><img src="../assets/images/glut5.png" height="300" alt=""></td>
                </tr>

                <tr>
                  <td align="left">Retire la aguja con movimiento rápido, coloque una tórula seca y aplique masaje circular  ( solo si lo que se administrando no es un medicamento de depósito)</td>
                  <td><img src="../assets/images/glut6.png" height="300" alt=""></td>
                </tr>

                
            
                <tr>
                  <td align="left">Elimine el material sucio, lávese las manos y registre el procedimiento.</td>
                  <td><img src="../assets/images/image008.jpg" width="232" height="200"></td>
                </tr>
                <tr>
                  <td height="61" align="center" valign="bottom"><strong>Contraindicaciones</strong></td>
                  <td align="center" valign="bottom"><strong>Indicaciones</strong></td>
                </tr>
                <tr>
                  <td>No deben administrarse medicamentos por inyección intramuscular a personas que usen anticoagulantes o que tengan problemas con la coagulación de la sangre o con el número o con el funcionamiento de las plaquetas, ya que se pueden formar hematomas locales de gran severidad.<br><br>
Además, se conocen bien los riesgos de la inyección en la región glútea en niños pequeños, debido al riesgo de lesionar el nervio ciático u otras estructuras descritas, por lo que debe evitarse inyectar en esta región en ellos.<br><br>
Las inyecciones en cualquiera de los dos cuadrantes inferiores  pueden lesionar el nervio ciático, así como otros nervios y vasos que emergen por debajo del músculo piramidal de la pelvis, ubicado profundamente en la región.<br><br>
</td>
                  <td>El paciente deberá ser colocado boca abajo con los pies en rotación interna y en flexión plantar cuando se localice el sitio por palpación. Esta posición asegura la relajación del músculo mientras se aplica la inyección. No se debe usar la posición de pie o sentado porque es imposible la relajación del músculo y hay peligro de que una brusca contracción pudiera llegar a romper la aguja.</td>
                </tr>
                <tr>
                  <td colspan="2">
                  <!-- VIDEO INICIO -->
                    <div class="">
                    <? $video = "ab"; 
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
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->


              <p class="texto">
                El sitio recomendado es el cuadrante superior externo del área glútea, y puede localizarse trazando una línea desde la espina ilíaca postero-superior hasta el trocánter mayor del fémur.
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
                Se debe administrarse medicamentos por inyección intramuscular a personas que usan anticoagulantes.              
              </p>       
              
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>


            <article class="content-box" data-tipo="image" data-sol="319485627">
              <h3 align="left" style="display:inline-block">3) Ordene las imágenes: </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->

              <p class="texto">
              </p>
              <ul id="imgtest">
                <li><img src="../assets/imgtest/3/3.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/3/1.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/3/9.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/3/4.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/3/8.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/3/5.jpg" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/3/6.jpg" alt=""><br><input type="text" class="imageres"></li> 
                <li><img src="../assets/imgtest/3/2.png" alt=""><br><input type="text" class="imageres"></li>
                <li><img src="../assets/imgtest/3/7.png" alt=""><br><input type="text" class="imageres"></li>

              </ul>
              <a href="#" class="button">Corregir</a>
            </article>


            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">4) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->

              <p class="texto">
                El paciente deberá ser colocado boca abajo con los pies en rotación interna y en flexión plantar cuando se localice el sitio por palpación.              </p>                     
              <a href="#" class="button" data-res="v">Verdadero</a>
              <a href="#" class="button" data-res="f">Falso</a>                         
            </article>


            <article class="content-box" data-tipo="vof" data-sol="v">
              <h3 align="left" style="display:inline-block">5) Seleccione la imagen correcta </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->

              <p class="texto">
                Cuál es el Angulo de punción que se utiliza en la administración de fármacos intramuscular
              </p>       
              
              <a href="#" class="button" data-res="v"><img src="../assets/imgtest/v.jpg"/></a>
              <a href="#" class="button" data-res="f"><img src="../assets/imgtest/f.jpg"/></a>                         
            </article>

            <!-- 3 -->
            <article class="content-box" data-tipo="vof" data-sol="f">
              <h3 align="left" style="display:inline-block">6) Verdadero o falso </h3>

              <!-- ENFERMERA INICIO -->
              <div class="enfermera">
              <? $enfermera = "bienvenida"; 
                 include "php/enfermera.php";?>
              </div>
              <!-- ENFERMERA FIN -->

              
              <p class="texto">
               Se elige el sitio de punción en cualquier área de la nalga sin importar la distancia que esta tenga con respecto al nervio ciático.
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
            data : {action:'nivelAprobado', nivel:'4', puntuacion:puntuacion},
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
              data : {action:'nivelReprobado', nivel:'4', puntuacion:puntuacion},
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
        window.location.href = "nivel4.php?denuevo";
      });

      $(".aprovado .button").click( function(e){
        e.preventDefault();        
        window.location.href = "index.php?goto=3";
      });
    });


    
    function next(){
      cajas.eq(i-1).slideUp('slow');
      cajas.eq(i).slideDown('slow');
    }
  });
  
  
</script>