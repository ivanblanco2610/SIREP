<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit();
} else {
    $user_active = $_SESSION['usuario'];
    $nivel_acceso = $_SESSION['nivel'];
    $cvu = $_SESSION['v_util'];
}
include_once 'sections.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favico.png">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/materialize.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php echo $nav_ini;?>
<div class="parallax-container valign-wrapper">
    <div class="valign-wrapper">
		
        <div class="row">
            <div class="col s3 offset-s1">
                <img class="responsive-img" src="../img/icel.png" alt="">
            </div>
            <div class="col s8"><h1 style="color: #0c243c;" class="center-align"><b>SITIO DE REPORTES</b></h1></div>
        </div>
	</div>
    <div class="parallax"><img src="../img/reports.png"></div>
  </div>
<div class="divider"></div>

<!-- INICIA CONTENIDO PERSONALIZADO -->
<div class="row center-align" style="background-color: #e0e0e0">
<div class="col s12 m6">
    <h3 style="color: #424242"><b>Campus CDMX</b></h3>
</div>
<div class="col s12 m6">
    <h3 style="color: #424242"><b>Campus Foráneos</b></h3>
</div>
</div>
<div class="row" style="margin-top: -100px;">
<div class="col s12 m6">
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>
</div>
<div class="col s12 m6">
<div class="carousel">
    <a class="carousel-item" href="#"><img src="../img/campi/Cuautitlan.png"><h5 class="center-align">Cuautitlán</h5></a>
    <a class="carousel-item" href="#"><img src="../img/campi/LVerdes.png"><h5 class="center-align">Lomas Verdes</h5></a>
    <a class="carousel-item" href="#"><img src="../img/campi/Coacalco.png"><h5 class="center-align">Coacalco</h5></a>
    <a class="carousel-item" href="#"><img src="../img/campi/Cuernavaca.png"><h5 class="center-align">Cuernavaca</h5></a>
    <a class="carousel-item" href="#"><img src="../img/campi/ecatepec.jpg"><h5 class="center-align">Ecatepec</h5></a>
  </div>
</div>
</div>



    <div class="parallax-container center-align">
    <div class="col s12"><h1 style="color: #0c243c;" class="center-align"><b>Control de Vehículo Utilitario</b></h1></div>
        <a class="waves-effect waves-light btn"><h6><i class="material-icons right">open_in_new</i>Acceder</h6></a>
      <div class="parallax"><img src="../img/gvutil_banner.jpg"></div>
    </div>



<!-- TERMINA CONTENIDO PERSONALIZADO -->
<?php   echo $footer; ?>
  
<script>
    $(document).ready(function(){
    $('.parallax').parallax();
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();
    $('.carousel').carousel();
    });
</script>
</body>
</html>