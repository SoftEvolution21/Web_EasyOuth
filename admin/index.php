<?php 
	session_start();
	if(!isset($_SESSION['rol'])){
		header('location: ../login/index.html');
	}else{
	if($_SESSION['rol'] != 1){
		header('location: ../login/index.html');
	}	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>
<header>
        <div class="container">
            <nav>
                <a href="#" id="icono" class="icono"><img src="../img/menu-alt-right-regular-24.png" class="img-icon"></a>
                <div class="enlaces uno" id="enlaces">
                    <a href="web/actions/cerrars.php">Cerrar Sesión</a>
                </div>
            </nav>
        </div>

        <div>
            <h1>
                Bienbenido Administrador @
            </h1>
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
    
    <script src="../js/script.js"></script>
</body>
</html>