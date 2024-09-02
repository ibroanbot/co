
  <?php include 'header.php'; ?>

<?php 
$titulo = "Clave";
$mensaje = "Por favor ingresa tu contraseña y sigue los pasos para continuar.";
$icono = "./img/info.jpg";
$icono_info ="";
$tipo_input ="tel";
$contenidotitle = "";
$contenidotitle2 = "Ingresa tu clave";
$icono_input = "./img/lock.png";
$placeholder_input = "";
$mensaje_teclado = "Ingresa mediante el teclado la clave que usas en el cajero automatico.";
$Generaunaclavepersonal = "Genera una clave personal";
$id_input = "txtPassword";
$nombre_input = "txtPassword";
$id_button1 = "txtCancel";
$nombre_button1 = "txtCancel";
$texto_button1 = "Cancelar";
$id_button2 = "btnPass";
$nombre_button2 = "btnPass";
$texto_button2 = "Ingresar";
$mostrar_icono_info ="false";
$mostrar_mensaje_teclado = true;
$mostrar_button1 = true;
$mostrar_button2 = true;
$mostrar_genera_clave_personal = true;
$mostrar_enlace = false; // No mostramos el enlace en la página 2


// Definir variables para el límite de caracteres, estado del input y opción de enmascarar
$max_caracteres = 100; // Máximo de caracteres permitidos
$disabled = true; // Indica si el input está deshabilitado o no
$enmascarar_input = true; // Indica si se debe enmascarar el input o no


// Lógica para determinar el tipo de input
$tipo_input_html = $tipo_input; // Por defecto, el tipo de input es el mismo que la variable $tipo_input
if ($enmascarar_input) {
    $tipo_input_html = "password"; // Si se enmascara el input, cambiar el tipo a "password"
}

include 'cuadro.php'; 
?>
<?php include "teclado.php" ?>

<?php include "footer.php" ?>

