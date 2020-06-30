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
            <h4 style="color: #424242"><b>Cartera Vencida</b></h4>
        </div>
    </div>

<div class="container">
<div class="row center-align">
            <div class="col s12">
                <iframe width="1000" height="800" src="https://app.powerbi.com/view?r=eyJrIjoiZTAxOTExNTctZDQzNy00ZWRlLTgyMzEtMmQyODNmN2FjYmY0IiwidCI6ImVkNDVjNjFlLWUyNzUtNGYxYS1iN2Q4LTEwYWIzNTg4YTJiOCJ9" frameborder="0" allowFullScreen="true"></iframe>
            </div>
        </div>
    
    <hr style="border: 2px solid #0464b4; margin-top:2%; margin-bottom:2%;">

<div class="row center-align">
    <div class="col s12">
        <h5>Cartera Mensual Histórico</h5>
    </div>
</div>

    <form id="carven" name="carven" onSubmit="return Saltar_carven()">
            <div class="row valign-wrapper center-align">
                <div class="col s4">
                    <div class="input-field col s12">
                        <select required name="year" id="slct">
                            <option value="" disabled selected>Año</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                        </select>
                        <label>Selecciona el año</label>
                    </div>
                </div>
                <div class="col s4">
                    <div class="input-field col s12">
                        <select required name="mes" id="slct">
                            <option value="" disabled selected>Mes</option>
                            <option value="ENERO">Enero</option>
                            <option value="FEBRERO">Febrero</option>
                            <option value="MARZO">Marzo</option>
                            <option value="ABRIL">Abril</option>
                            <option value="MAYO">Mayo</option>
                            <option value="JUNIO">Junio</option>
                            <option value="JULIO">Julio</option>
                            <option value="AGOSTO">Agosto</option>
                            <option value="SEPTIEMBRE">Septiembre</option>
                            <option value="OCTUBRE">Octubre</option>
                            <option value="NOVIEMBRE">Noviembre</option>
                            <option value="DICIEMBRE">Diciembre</option>
                        </select>
                        <label>Selecciona el mes</label>
                    </div>
                </div>
                <div class="col s4">
                    <button name="button" id="btn12" onClick="Saltar_carven();" class="waves-effect waves-light btn"><i class="material-icons right">file_download</i>Descargar Reporte</button>
                </div>

            </div>
        </form>
        <div class="row center-align">
            <div class="col s12">
                <div class="divider"></div>
                <p style="color: #9e9e9e">En caso de requrir un reporte anterior a 2015 por favor solicitarlo a la Coordinación de Centros de Cómputo</p>
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