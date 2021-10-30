<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="#" id="icono" class="icono"><img src="../img/menu-alt-right-regular-24.png" class="img-icon"></a>
                <div class="enlaces uno" id="enlaces">
                    <a href="../index.html">Inicio</a>
                    <a href="index.html">Iniciar Sesión</a>
                    <a href="">Acerca de</a>
                    <a href="../web/contacto.html">Contacto</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- este bloque de codigo hace el efecto de ola de mar en el color del la pagina ya que
    wave significa ¡hola de mar! -->
    <div class="wave">
        <div style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" 
                style="stroke: none; fill: #fff;">
                </path>
            </svg>
        </div>
    </div>
   <form action="validar.php" method="post">
        <img src="../img/easyauth2.png" alt="">
        <p>Usuario <input type="text" placeholder="ingrese su matricula" name="nombre" autocomplete="off"></p><br>
        <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="passwd"></p>
        <input type="submit" value="Iniciar Sesión">
   </form> 

   <script src="../js/script.js"></script>
</body>
</html>