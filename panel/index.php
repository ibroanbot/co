<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" type="image/png" href="monitor.png">
  <title>Control Center Operator </title>
  <link href="css/styles.css" rel="stylesheet">
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/jquery-3.6.0.js"></script>
  <style>
  :root {
    --font-style: "Nunito Sans", sans-serif;
  }

  body {
    font-family: var(--font-style);
    overflow: hidden;
    margin: 0;
    padding: 0;
    background-image: url("./font.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

  .titulo {
    color: #fff;
    text-align: center;
    font-size: 32px;
    margin-top: 100px;
    text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.3);
  }

  .login {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.8);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
  }

  .entradas {
    position: relative;
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
    border-left: none; /* Oculta el borde izquierdo */
    border-right: none; /* Oculta el borde derecho */
    border-top: none; /* Oculta el borde superior */
  }

  .etiquetas {
    color: #fff;
    font-size: 18px;
  }

  .mensaje {
    color: #fff;
    display: none;
  }

  .btn {
    display: block;
    margin: 0 auto;
    padding: 8px 16px;
    background-color: #0035ff;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: #45a049;
  }

  .btn:active {
    background-color: #388e3c;
  }

  @media screen and (max-width: 768px) {
    .login {
      width: 80%;
      padding: 20px;
    }
  }

  @media screen and (max-width: 480px) {
    .titulo {
      font-size: 24px;
      margin-top: 50px;
    }

    .entradas {
      font-size: 14px;
    }

    .etiquetas {
      font-size: 16px;
    }

    .mensaje {
      font-size: 14px;
    }

    .btn {
      font-size: 14px;
      padding: 6px 12px;
    }
  }
</style>


</head>

<body oncontextmenu="return false" onkeydown="return true">
  <h2 class="titulo">OPERADOR DE CENTRO DE CONTROL</h2>
  <div class="login">
    <form>
      <span class="etiquetas">Usuario:</span><br>
      <input type="text" name="txtUsuario" id="txtUsuario" autocomplete="off" class="entradas" required="8">
      <br><br><br>
      <span class="etiquetas">Contraseña:</span><br>
      <input type="password" name="txtPass" id="txtPass" autocomplete="off" class="entradas" required="8">
      <br><br>
      <input type="button" id="btnLogin" name="btnLogin" value="Ingresar" class="btn">
      <br>
      <span class="mensaje">Usuario no registrado</span>
    </form>
  </div>
</body>

<script>
  $(document).ready(function() {
    $("#btnLogin").click(function(evento) {
      const txtUsuario = $("#txtUsuario");
      const txtPass = $("#txtPass");
      const mensaje = $(".mensaje");

      // Obtener el contador de intentos de inicio de sesión
      let intentos = parseInt(localStorage.getItem("intentos")) || 0;

      if (txtUsuario.val().length > 0) {
        if (txtPass.val().length > 0) {
          if (intentos < 20) {
            // Preparar los datos para enviar al servidor
            const datos = {
              usr: txtUsuario.val(),
              pass: txtPass.val()
            };

            // Enviar la solicitud al servidor utilizando una consulta parametrizada
            $.post("sesion.php", datos, function(data) {
              if (data === "OK") {
                window.location.href = "txl";
              } else {
                if (data === "NO") {
                  mensaje.show().html("Usuario no registrado");
                  txtUsuario.focus();
                } else {
                  if (data === "ERR") {
                    mensaje.show().html("Problemas de conexión");
                    txtUsuario.focus();
                  }
                }
                // Incrementar el contador de intentos de inicio de sesión
                intentos++;
                localStorage.setItem("intentos", intentos);
              }
            });
          } else {
            mensaje.show().html("Demasiados intentos fallidos. Intente más tarde.");
          }
        } else {
          mensaje.show().html("Ingrese su contraseña");
          txtPass.focus();
        }
      } else {
        mensaje.show().html("Ingrese su usuario");
        txtUsuario.focus();
      }
    });

    $("#txtUsuario, #txtPass").keyup(function(e) {
      $(".mensaje").hide();
    });
  });
</script>


</html>
