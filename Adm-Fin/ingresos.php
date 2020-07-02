<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit();
} else {
    $user_active = $_SESSION['usuario'];
    $nivel_acceso = $_SESSION['nivel'];
}
include_once '../app/sections.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favico.png">
    <title>Ingresos</title>
    <link rel="stylesheet" href="../css/materialize.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="row valign-wrapper" style="background-color: #e0e0e0; border-bottom: 2px solid #0464b4;">
<div class="col s2">
    <img class="responsive-img" src="../img/logo_SIREP_blue.png">
</div>
<div class="col s8 center-align">
    <h4 style="color: #424242;"><b>Comparativa de Ingresos</b></h4>
</div>
<div class="col s2 right-align">
<a style="background-color: #0464b4;" class="btn-floating btn-large waves-effect waves-light #0473cb btn tooltipped" data-position="left" data-tooltip="Cerrar" onclick="window.close();">
    <i class="material-icons">close</i></a>
</div>
</div>
<div class="row center-align">
    <div class="col s12">
    <iframe style="width: 100%; height: 550px;" src="https://app.powerbi.com/view?r=eyJrIjoiY2MzZjRkNDYtODlhMS00MTQzLWI4ZTYtZTkzOGQ4OWY1Y2E5IiwidCI6ImVkNDVjNjFlLWUyNzUtNGYxYS1iN2Q4LTEwYWIzNTg4YTJiOCJ9" scrolling="no"></iframe> 
    </div>
</div>
<?php
echo $footer_reports;
?>
<script>
    $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
</script>
</body>
</html>