<? require_once "php/setup.php"; 

$id = $_GET['id'];

  $query = "SELECT * , (
    SELECT SUM(nota) / COUNT(1)
      FROM notas 
      WHERE usuario_id = u.id 
    ) AS promedio
FROM usuarios u
WHERE id = '$id'
";

$r = mysql_query($query);
$alumno = mysql_fetch_object($r);



$qnotas = "SELECT n.id, n.nota, n.estado, n.fecha, e.evaluacion, e.preguntas
FROM notas n
LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
WHERE n.usuario_id = '$id'";

$rnotas = mysql_query($qnotas);

function porcentaje($i, $max){
  return round(100/$max * $i,2)." %";
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

<style type="text/css">
  table tr:nth-child(even){
    background-color: #ccc;
  }
  table{
    border: 1px solid #ccc;
    border-radius: 4px;
    text-align: center;
  }

  table tr td{
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
              <h5> <? echo $alumno->nombre; ?> - CI: <? echo $alumno->ci; ?> </h5>

            
              <table width="100%" >
                <tr>
                  <td><strong>Evaluación</strong></td>
                  <td><strong>Nota</strong></td>
                  <td><strong>Estado</strong></td>
                </tr>
                <? while($notas = mysql_fetch_object($rnotas)){ ?>
                <tr>
                  <td><? echo utf8_encode($notas->evaluacion); ?></td>
                  <td><? echo porcentaje($notas->nota, $notas->preguntas); ?></td>
                  <td><? echo ($notas->estado=='si')?"Aprobado":"Reprobado"; ?></td>
                </tr>
                <? } ?>
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