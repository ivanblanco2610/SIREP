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
    <link rel="stylesheet" href="../css/hover.min.css"/>
    <link rel="stylesheet" href="../css/hover.css"/>
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

<!-- INICIA CONTENIDO PERSONALIZADO  POR NIVEL -->
<?php 
if($nivel_acceso == 1){
    echo $content_ini_niv_1;
}
?>

<div class="container">
    <div class="row">
        <div class="col s4 offset-s2">
            <h3>
                Zona Rosa
            </h3>
        </div>
        <div class="col s4">
        <div class="card">
        <div class="card-image">
          <img src="../img/campi/zonarosa.png">
        </div>
        <div class="card-action">
          <a href="#">Clic para continuar</a>
        </div>
      </div>
        </div>
    </div>
</div>


<!-- TERMINA CONTENIDO PERSONALIZADO  POR NIVEL -->

<!-- MUESTRA MODULO DE GESTIÓN DE VEHÍCULO UTILITARIO EN CASO DE TENER ACCESO -->

    <div class="parallax-container center-align">
    <div class="col s12"><h1 style="color: #0c243c;" class="center-align"><b>Control de Vehículo Utilitario</b></h1></div>
        <a class="hvr-shrink waves-effect waves-light btn"><h6><i class="material-icons right">open_in_new</i>Acceder</h6></a>
      <div class="parallax"><img class="hvr-grow" src="../img/gvutil_banner.jpg"></div>
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