<?php 
	session_start();
	if(!isset($_SESSION['rol'])){
		header('location: ../login/index.html');
	}else{
	if($_SESSION['rol'] != 2){
		header('location: ../login/index.html');
	}	
	}
    $tutor=$_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="#" id="icono" class="icono"><img src="../img/menu-alt-right-regular-24.png" class="img-icon"></a>
                <div class="enlaces uno" id="enlaces">
                    <a href="">Permisos</a>
                    <a href="actions/cerrars.php">Cerrar Sesión</a>
                </div>
            </nav>
        </div>

        <div>
            <h1>
                Bienvenido Tutor
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

    <?php 
    
        include_once('../bd/db.php');
        $db = new Database();

        $consulta= $db->connect()->prepare('SELECT * FROM tbl_user INNER JOIN solicitudpermiso_tbl_user WHERE solicitudpermiso_tbl_user.idtbl_user = tbl_user.idtbl_user ORDER BY tx_appaterno ASC');
        $row = $consulta->fetch(PDO::FETCH_NUM);

        if(isset($row)){
            ?>
            <br><br><br><center>
            <table class="tabla_datos">
                <thead>
                    <tr id='titulo'>
                        <td>Matricula</td>
                        <td>A. paterno</td>
                        <td>A. materno</td>
                        <td>nombre</td>
                        <td>Dias del permiso</td>
                        <td>Motivo</td>
                        <td>N° Permiso</td>
                        <td>Status</td>
                        <td>Fecha de solicitud</td>
                        <td>Observación</td>
                        <td></td>
                    </tr>
                </thead>

                <?php
                $tutor=$_SESSION['nombre'];
                $sql="SELECT * FROM tbl_user INNER JOIN solicitudpermiso_tbl_user WHERE solicitudpermiso_tbl_user.idtbl_user = tbl_user.idtbl_user AND tx_statuspermiso='pendiente' AND tutor=$tutor";
                $result=mysqli_query($con,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                    ?>

                    <tr>
                        <td><?php echo $mostrar['matriculauser'] ?></td>
                        <td><?php echo $mostrar['tx_appaterno'] ?></td>
                        <td><?php echo $mostrar['tx_apmaterno'] ?></td>
                        <td><?php echo $mostrar['tx_nombreuser'] ?></td>
                        <td><?php echo ($mostrar['dias']." de ". $mostrar['mes']." del ". $mostrar['anio'])?></td>
                        <td><?php echo $mostrar['motivo'] ?></td>
                        <td><?php echo $mostrar['No_permiso'] ?></td>
                        <td><?php echo $mostrar['tx_statuspermiso'] ?></td>
                        <td><?php echo $mostrar['dt_solicitud'] ?></td>
                        <td><input type="text" name="observaciones" placeholder="Observaciones"></td>
                        <td><a class="btn-mod">Confirmar</a>
                        | 
                            <a class="btn-warning">Rechazar</a></td>
                    </tr>
                    <?php 
                }
            ?>
                </table>
                </center>
            <?php
        }
    ?>

    <script src="../js/script.js"></script>
</body>
</html>