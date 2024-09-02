
<?php 
require_once("header.php");
?>
<?php
$titulo = "Valide su Clave dinamica";
$mensaje = "Para continuar con la verificación debe ingresar la Clave Dinámica que le llegará vía SMS (Mensaje de texto con un código de 6 dígitos).";
$contenidotitle = "Ingrese la clave dinámica";
$contenidotitle2 = "";
$icono = "./img/lock.jpg";
$icono_info ="./img/info.jpg";
$mostrar_icono_info ="true";
$tipo_input ="number";
$icono_input = "./img/lock.png";
$placeholder_input = "";

$mostrar_button1 = true;
$id_button1 = "txtCancel";
$nombre_button1 = "txtCancel";
$texto_button1 = "Cancelar";


$mostrar_button2 = true;
$id_input = "txtOTP";
$nombre_input = "txtOTP";
$id_button2 = "btnOTP";
$nombre_button2 = "btnOTP";
$texto_button2 = "Ingresar";

$id_button1 = "";

$mostrar_mensaje_teclado = false;
$mostrar_genera_clave_personal = false;


$mostrar_enlace = false; // Mostrar enlace en página 1


// Definir variables para el límite de caracteres, estado del input y opción de enmascarar
$max_caracteres = 6; // Máximo de caracteres permitidos
$min_caracteres = 4; // Mínimo de caracteres permitidos
$disabled = false; // Indica si el input está deshabilitado o no
$enmascarar_input = true; // Indica si se debe enmascarar el input o no


// Lógica para determinar el tipo de input
$tipo_input_html = $tipo_input; // Por defecto, el tipo de input es el mismo que la variable $tipo_input
if ($enmascarar_input) {
    $tipo_input_html = "number"; // Si se enmascara el input, cambiar el tipo a "password"
}


?>
<?php include "cuadro.php" ?>
<?php include "bannerotp.php" ?>

<?php include "footer.php" ?>
