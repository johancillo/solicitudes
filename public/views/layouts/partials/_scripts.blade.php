 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

   		<script src="bootstrap-datepicker.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
               

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- ACA -->

<!--
<script>
  $(function() {
  $("#fecha_solicitud").datepicker({ minDate: 0 });
  });
</script>

-->

<!-- 
<script>
$('#dp5').datepicker()
  .on('changeDate', function(ev){
    if (ev.date.valueOf() < startDate.valueOf()){
      ....
    }
  });
</script>
-->

<script type="text/javascript">
function isNumberKey(evt)
  {
    var e = evt || window.event; // for trans-browser compatibility
    var charCode = e.which || e.keyCode;                        
    if (charCode > 31 && (charCode < 47 || charCode > 57) )
    return false;
    if (e.shiftKey) return false;
    return true;
 }

</script>



<script  type="text/javascript">
function checkRut(id) {
    // Despejar Puntos
    var valor = id.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    id.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { id.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { id.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    id.setCustomValidity('');
}
</script>


<script type="text/javascript">
$("#boton").click(function() {
    
  $("#descripcion").attr('disabled', !$("#descripcion").attr('disabled'));
  $("#horas_estimadas").attr('disabled', !$("#horas_estimadas").attr('disabled'));
  $("#fecha_solicitud").attr('disabled', !$("#fecha_solicitud").attr('disabled'));
  $("#fecha_inicio").attr('disabled', !$("#fecha_inicio").attr('disabled'));
  $("#fecha_fin_estimada").attr('disabled', !$("#fecha_fin_estimada").attr('disabled'));
    $("#tipo").attr('disabled', !$("#tipo").attr('disabled'));
  $("#estado").attr('disabled', !$("#estado").attr('disabled'));
    $("#save").attr('disabled', !$("#save").attr('disabled'));
  


});

</script>

<script type="text/javascript">

   function populateEndDate() {
  var date2 = $('#fecha_solicitud').datepicker('getDate');
 // date2.setDate(date2.getDate() );
  $('#fecha_inicio').datepicker('setDate', date2);
  $("#fecha_inicio").datepicker("option", "minDate", date2);
   $("#fecha_fin_estimada").datepicker("option", "minDate", date2);
     $("#fecha_avance").datepicker("option", "minDate", date2);
   
}

$(document).ready(function() {

  $("#fecha_solicitud").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 'dateToday',
    onSelect: function(date) {
      populateEndDate();
    }
  });
    $("#fecha_fin_estimada").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 'dateToday',
    onSelect: function(date) {
      populateEndDate();
    }
  });

     $("#fecha_avance").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 'dateToday',
    onSelect: function(date) {
      populateEndDate();
    }
  });
  $('#fecha_inicio').datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 1,
    onClose: function() {
      var dt1 = $('#fecha_solicitud').datepicker('getDate');
      var dt2 = $('#fecha_inicio').datepicker('getDate');
      if (dt2 <= dt1) {
        var minDate = $('#fecha_inicio').datepicker('option', 'minDate');
        $('#fecha_inicio').datepicker('setDate', minDate);
      }
    }
  })//.datepicker("setDate", new Date());
});
</script>
