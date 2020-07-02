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
include_once '../app/sections.php';
include_once '../app/logic/conn.php';

$sql_campus = 'SELECT beca_value FROM campus_sirep WHERE id_campus = "$nivel_acceso"';
$result_sql_campus = $mysqli->query($sql_campus);
$row = $result_sql_campus->num_rows;
echo $row;
if($row == 1){
    echo $row;
    $campus_bec = $result->fetch_assoc();
    $campus = $campus_bec['beca_value'];
}
echo $campus;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favico.png">
    <title>Cartera Vencida</title>
    <link rel="stylesheet" href="../css/materialize.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php echo $nav_sections;?>
<div class="row center-align" style="background-color: #e0e0e0">
        <div class="col s12">
            <h4 style="color: #424242"><b>Avance en el registro de Becas y Convenios</b></h4>
        </div>
    </div>

<div class="container">
    <div class="row">
    <div class="col s2">
        <h5 class="center-align";>Período <br> C2-20</h5>
        <hr style="border: 2px solid #0464b4; margin-top:2%; margin-bottom:2%;">
    <form action="https://soporte.icel.edu.mx/icel/icel/beccon/listados.php" method="POST" target="_blank">
        <p>Elije un listado</p>
    <p>
      <label>
        <input name="reporte" type="radio" checked />
        <span>Faltantes</span>
      </label>
    </p>
    <p>
      <label>
        <input name="reporte" type="radio" />
        <span>Prospectos</span>
      </label>
    </p>
    <div class="input-field col s12">
    <select required name="nivel">
      <option value="" disabled selected>Elije el nivel</option>
      <option value="BACH. CUAT.">Bachillerato Cuatrimestral</option>
      <option value="Superior">Nivel Superior (Lic, Espec, Maes)</option>
    </select>
    <label>Nivel</label>
  </div>
  <input type="hidden" name="campus" value="<?php echo $campus; ?>">
  <button class="btn waves-effect waves-light" type="submit" name="action">Generar
    <i class="material-icons right">filter_list</i>
  </button>
    </div>
    <div class="col s10 center-align">
        <iframe style="width: 100%; height: 600px;" src="https://soporte.icel.edu.mx/icel/icel/beccon/grabeccon3.html" frameborder="0" scrolling="no"></iframe>
    </div>
    </div>


</div> <!-- CIERRA CONTAINER PRINCIPAL  -->

<?php echo $footer;?>
<script>
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
            $('select').formSelect();
        });
    </script>
</body>
</html>