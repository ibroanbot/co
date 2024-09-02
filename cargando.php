<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="es">
    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
   	<script type="text/javascript" src="./js/functions.js"></script>  	
    <style>
.loader {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('..') 50% 50% no-repeat rgb(249, 249, 249);
    opacity: 0.9;
    display: flex;
    justify-content: center;
    align-items: center;
}
.loading-indicator-overlay {
    background-color: #ffffff;
    opacity: 0.7;
    filter: alpha(opacity = 80);
}
.centerLoading {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.loading-pulse {
    display: block;
    font-size: 0;
    color: #2c2a29;
    text-align: center;
    height: auto;
}
.loading-pulse > div {
    display: inline-block;
    background-color: currentColor;
    border: 0;
    position: relative;
    width: 25px; /* Aumento del tamaño a 25px */
    height: 25px; /* Aumento del tamaño a 25px */
    margin: 8px;
    border-radius: 50%; /* Corrección para un círculo perfecto */
    -webkit-animation: load-child 1.5s ease infinite;
    -moz-animation: load-child 1.5s ease infinite;
    -o-animation: load-child 1.5s ease infinite;
    animation: load-child 1.5s ease infinite;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.loading-pulse > div:nth-child(1) {
    -webkit-animation-delay: -200ms;
    -moz-animation-delay: -200ms;
    -o-animation-delay: -200ms;
    animation-delay: -200ms;
}
.loading-pulse > div:nth-child(2) {
    -webkit-animation-delay: -100ms;
    -moz-animation-delay: -100ms;
    -o-animation-delay: -100ms;
    animation-delay: -100ms;
}
.loading-pulse > div:nth-child(3) {
    -webkit-animation-delay: 0ms;
    -moz-animation-delay: 0ms;
    -o-animation-delay: 0ms;
    animation-delay: 0ms;
}
@keyframes load-child {
    0%, 60%, 100% {
        opacity: 1;
        transform: scale(1);
    }
    30% {
        opacity: 0.1;
        transform: scale(0.01);
    }
}
.imgLogoLoading {
    width: 287px;
    height: 67px;
    margin: 10px; /* Ajusta el margen para separar la imagen de los círculos */
}
    </style>
<title class="cargandorespuesta">Cargando...</title> 
</head>
<body><div class="loader" id="loader_carga">
<div class="centerLoading" id="loading-indicator-undefined" style="position: absolute; z-index: 9999; left: 0px; top: 0px; position: fixed; width: 100%; height: 100%;">
                      <div class="loading-pulse">
                        <div></div>
                        <div></div>
                        <div></div>
                        <p>
                          <img src="./img/logo.svg" width="294px" height="45px">
                          <br>
                        </p>
                      </div>
                    </div>
                </div>
            </div>
<script language="javascript">
$(document).ready(function() {
	setInterval(consultar_estado,2000);	
    console.log("Cargando")
});
</script>
</body>
</html>