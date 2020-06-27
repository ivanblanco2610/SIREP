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
    <title> Est. NI-RI</title>
    <link rel="stylesheet" href="../css/materialize.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php echo $nav_sections; ?>


    <div class="row center-align" style="background-color: #e0e0e0">
        <div class="col s12">
            <h4 style="color: #424242"><b>Estadísticas de Pagos Ingreso / Reingreso por periodo</b></h4>
        </div>
    </div>

    <div class="container">
        <div class="row center-align">
            <div class="col s12">
                <iframe width="1000" height="800" src="https://app.powerbi.com/view?r=eyJrIjoiOGQ4OTI1ZmItYTY3OC00MjIzLThmZDEtYjJlZjliYjE1Y2VlIiwidCI6ImVkNDVjNjFlLWUyNzUtNGYxYS1iN2Q4LTEwYWIzNTg4YTJiOCJ9" frameborder="0" allowFullScreen="true"></iframe>
            </div>
        </div>
        <hr style="border: 2px solid #0464b4; margin:3%;">
        <div class="row valign-wrapper center-align">
            <div class="col s4">
                <h5>Pagos <br> Ingreso / Reingreso</h5>
            </div>
            <div class="col s4">
                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons left">grid_on</i>Mayo - Agosto c2-2020</a>

                <!-- Modal Structure -->
                <div id="modal1" class="modal" style="width:1200px; height:750px;">
                    <div class="modal-content">
                        <iframe width="1200" height="750" src="https://soporte.icel.edu.mx/icel/icel/estpag/pagosC2.php" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                </div>

            </div>
            <div class="col s4">
                <a class="waves-effect waves-light btn" href="javascript:open_est_ni_ri('https://soporte.icel.edu.mx/icel/icel/estpag/pagosC3.php')"><i class="material-icons left">grid_on</i>Septiembre - Diciembre C3-2020</a>
            </div>
        </div>

        <hr style="border: 2px solid #0464b4; margin:2%;">

        <div class="row center-align">
            <div class="col s12">
                <h5>Cronograma Comparativo de Pagos</h5>
            </div>
        </div>
        <div class="row center-align">
            <div class="col s12 m6">
                <iframe src="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/comp-graf.html" width="450" height="350" frameborder="0" allowFullScreen="true" scrolling="no"></iframe>
            </div>
            <div class="col s12 m6">
                <iframe src="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/C3/comp-graf.html" width="450" height="350" frameborder="0" allowFullScreen="true" scrolling="no"></iframe>
            </div>
        </div>
        <div class="row center-align">
            <div class="col s6">
                <p style="color: #0464b4; font-weight:bold;">Reportes C2-20</p>
                <a href="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/completo.html" target="_blank">
                    <div class="chip">Detalle Resumen</div>
                </a>
                <a href="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/completo-acumulado.html" target="_blank">
                    <div class="chip">Acumulado nuevo ingreso</div>
                </a>
                <a href="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/campi.html" target="_blank">
                    <div class="chip">Resumen Campi</div>
                </a>
                <a href="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/licej.html" target="_blank">
                    <div class="chip">Detalle Lic. Ejectutiva</div>
                </a>
                <a href="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/C3/bachi.html" target="_blank">
                    <div class="chip">Detalle Bachillerato</div>
                </a>
                <a href="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/espec.html" target="_blank">
                    <div class="chip">Detalle Especialidad</div>
                </a>
                <a href="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/liccua.html" target="_blank">
                    <div class="chip">Detalle Licenciatura</div>
                </a>
                <a href="https://soporte.icel.edu.mx/icel/icel/reportes/Crono/maest.html" target="_blank">
                    <div class="chip">Detalle Maestría</div>
                </a>
            </div>
            <div class="col s6">
                <p style="color: #0464b4; font-weight:bold;">Reportes C3-20</p>
                <a href="" target="_blank">
                    <div class="chip">Detalle Resumen</div>
                </a>
                <a href="" target="_blank">
                    <div class="chip">Acumulado nuevo ingreso</div>
                </a>
                <a href="" target="_blank">
                    <div class="chip">Resumen Campi</div>
                </a>
                <a href="" target="_blank">
                    <div class="chip">Detalle Lic. Ejectutiva</div>
                </a>
                <a href="" target="_blank">
                    <div class="chip">Detalle Bachillerato</div>
                </a>
                <a href="" target="_blank">
                    <div class="chip">Detalle Especialidad</div>
                </a>
                <a href="" target="_blank">
                    <div class="chip">Detalle Licenciatura</div>
                </a>
                <a href="" target="_blank">
                    <div class="chip">Detalle Maestría</div>
                </a>
            </div>
        </div>
        <hr style="border: 2px solid #0464b4; margin:3%;">
        <form id="pagos" name="pagos" onSubmit="return Saltar()">
            <div class="row valign-wrapper center-align">
                <div class="col s3">
                    <h5>Reportes de <br> Períodos Anteriores</h5>
                </div>

                <div class="col s3">
                    <div class="input-field col s12">
                        <select required name="year" id="slct">
                            <option value="" disabled selected>Año</option>
                            <option value="20">2020</option>
                            <option value="19">2019</option>
                            <option value="18">2018</option>
                            <option value="17">2017</option>
                        </select>
                        <label>Selecciona</label>
                    </div>
                </div>
                <div class="col s3">
                    <div class="input-field col s12">
                        <select required name="periodo" id="slct">
                            <option value="" disabled selected>Período</option>
                            <option value="1">Enero - Abril</option>
                            <option value="2">Mayo - Agosto</option>
                            <option value="3">Septiembre - Diciembre</option>
                        </select>
                        <label>Selecciona el período</label>
                    </div>
                </div>
                <div class="col s3">
                    <button name="button" id="btn12" onClick="Saltar();" class="waves-effect waves-light btn"><i class="material-icons right">content_paste</i>Ver reporte</button>
                </div>

            </div>
        </form>
        <div class="row center-align">
            <div class="col s12">
                <div class="divider"></div>
                <p style="color: #9e9e9e">En caso de requrir un reporte anterior por favor solicitarlo a la Coordinación de Centros de Cómputo</p>
            </div>
        </div>
    </div> <!-- CIERRA CONTAINER-->

    <?php echo $footer; ?>
    <script>
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
            $('.modal').modal();
            $('select').formSelect();
        });
    </script>
</body>
</html>