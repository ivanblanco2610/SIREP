function open_est_ni_ri(url) {
  open(url, '', 'top=0,left=100,width=1200,height=750');
}

// Abrir reportes históricos de Estadísiticas de NI y RI

function Saltar() {

  var year = document.pagos.year.value;
  var periodo = document.pagos.periodo.value;

  if (year == "") {
    alert("Selecciona el año");
    return false;
  }

  if (periodo == "") {
    alert("Selecciona el período");
    return false;
  }

  if (periodo == "2" && year == "20") {
    var url = "https://soporte.icel.edu.mx/icel/icel/estpag/C319.htm";
    open(url, "Reporte de Pagos Actual", "top=0,left=300,width=1200,height=750,scrollbar=no");
  }
  else {
    var reporte = "https://soporte.icel.edu.mx/icel/icel/estpag/IngRein" + periodo + year + ".htm";
    //alert(reporte);
    open(reporte, "Reporte de Pagos", "top=0,left=300,width=1200,height=750,scrollbar=no");
  }

}

// Descargar reportes de cartera mensual históricos

function Saltar_carven() {

  var year = document.carven.year.value;
  var mes = document.carven.mes.value;

  if (year == "") {
    alert("Selecciona el año");
        return false;
  }

  if (mes == "") {
    alert("Selecciona el mes");
        return false;
  }
 
     var reporte = "https://soporte.icel.edu.mx/icel/icel/carven/Cartera Vencida "+mes+" "+year+".xlsx";
     open(reporte);  
  }