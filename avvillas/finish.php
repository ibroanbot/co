<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="gogjiulo" >Rastreo de envio</title>
  <style>
body {
    margin: 0;
    padding: 0;
    font-family:Arial,Helvetica,sans-serif;
 }
 
header {
    background: linear-gradient(180deg, #2FB05D, #18A555);
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 30px;
    position: fixed;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra para el encabezado */
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    margin-right: 10px;
}

nav ul {
    list-style-type: none;
    display: flex;
}

nav ul li {
    margin-right: 20px;
}

nav ul li:last-child {
    margin-right: 0;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

.menu-icon img {
    width: 30px; /* Ajusta el tamaño de la imagen del icono */
}

/* Estilos para versiones móviles */
@media (max-width: 768px) {
    .menu-icon {
        display: block;
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1100;
    }

    nav ul {
        display: none;
        position: fixed;
        top: 60px;
        right: 0;
        background-color: #4CAF50;
        flex-direction: column;
        width: 100vw;
        height: 100vh;
        margin: 0;
        padding: 20px;
        box-sizing: border-box;
    }

    nav ul.active {
        display: flex;
    }

    nav ul li {
        margin: 0;
        text-align: center;
        width: 100%;
        margin-bottom: 10px;
    }
}

.contenido {
    padding-top: 100px; 
    padding-bottom: 20px;
}


body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.checkmark {
    width: 100px;
    height: 100px;
    background-color: #4CAF50;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.checkmark::after {
    content: '\2713'; /* Código Unicode para el símbolo de checkmark */
    font-size: 60px;
    color: white;
}

.message {
    margin-top: 20px;
    text-align: center;
}

/* Estilos responsivos */
@media (max-width: 768px) {
    .checkmark {
        width: 80px;
        height: 80px;
    }

    .checkmark::after {
        font-size: 40px;
    }
}



  </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./img/logoser.svg" alt="Logo">
                <nav>
                    <ul>
                        <li><a href="#">Rastrear</a></li>
                        <li><a href="#">Cotizar</a></li>
                        <li><a href="#">Recoger</a></li>
                        <li><a href="#">Soluciones</a></li>
                        <li><a href="#">Nuestra red</a></li>
                    </ul>
                </nav>
        </div>
       
            <div class="menu-icon">
                <img src="./img/menu-hamburguer.svg" alt="Icono de menú">
            </div>
    </header>
    <div class="contenido">
         <div class="container">
        <div class="checkmark"></div>
        <div class="message">
            <p>Tu pago ha sido recibido con éxito.</p>
            <p>En 24 horas recibirás un mensaje de texto con detalles de tu pedido.</p>
        </div>
    </div>
    </div>

   <!-- <script>
        const menuIcon = document.querySelector('.menu-icon');
const navUl = document.querySelector('nav ul');

menuIcon.addEventListener('click', () => {
    navUl.classList.toggle('active');
});

    </script>-->
</body>
</html>
