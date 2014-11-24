<?php require_once "php/setup.php"; 

$ci = $_GET['ci'];
if($ci){
	$i = "AND ci LIKE '%".$ci."%'";
}

  $query = "SELECT * , (
    SELECT SUM(nota) / COUNT(1)
      FROM notas 
      WHERE usuario_id = u.id 
    ) AS promedio
FROM usuarios u
WHERE tipo = 'Alumno' ".$i;

$r = mysql_query($query);

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
          <?php $p=2; require "php/nav.php"; ?>
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
            <form action="promedios.php" method="GET" style="float:right;"> 
            	<input type="text" name="ci" placeholder="Buscar por CI">
                <input type="submit" value="Buscar">
               </form>
              <h2> Listado de alumnos </h2>
              <table width="100%" >
                <tr>
                  <td><strong>Alumno</strong></td>
                  <td><strong>Promedio</strong></td>
                  <td><strong>Ver</strong></td>
                </tr>
                <?php $total=0; $i=0; 
                while($alumnos = mysql_fetch_object($r)){ 
                  

                  $prom = 0; $cprom=0;
                  $id = $alumnos->id;

               $qnotas = "SELECT n.id, n.nota, n.estado, n.fecha, e.evaluacion, e.preguntas
                FROM notas n
                LEFT JOIN evaluaciones e ON e.id = n.evaluacion_id
                WHERE n.usuario_id = '$id'";

                $rnotas = mysql_query($qnotas);

                while($notas = mysql_fetch_object($rnotas)){ 
                  $cprom++;
                  $prom =$prom+(int)porcentaje($notas->nota, $notas->preguntas);                
                } 

                if($cprom>0){
                  $prom = $prom / $cprom;
                }

                $prom = number_format($prom, 2, '.', '');

                $total += $prom;$i++;  


                ?>
                <tr>
                  <td><?php echo $alumnos->nombre; ?></td>
                  <td><?php echo $prom." %"; ?></td>
                  <td><a href="alumno.php?id=<?php echo $alumnos->id; ?>">Ver </a></td>
                </tr>
                <?php } ?>
              </table>
              <br>
              <p>Promedio de alumnos: <?php echo number_format($total/$i, 2, '.', '')." %"; ?></p>
            </article>
          </div>
    </section>
        <!-- Footer -->
    <?php require "../assets/footer.php"; ?>

  </div>
</div>
</body>
</html>