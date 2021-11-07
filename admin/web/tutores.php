<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>
<header>
        <div class="container">
            <nav>
                <a href="#" id="icono" class="icono"><img src="../../img/menu-alt-right-regular-24.png" class="img-icon"></a>
                <div class="enlaces uno" id="enlaces">
                    <a href="../index.php">Inicio Administrador</a>
                    <a href="alumnos.php">Alumnos</a>
                    <a href="carreras.php">Carreras</a>
                    <a href="grupos.php">Grupos</a>
                    <a href="">Tutores</a>
                    <a href="actions/cerrars.php">Cerrar Sesión</a>
                </div>
            </nav>
        </div>

        <div>
            <h1>
                Tutores
            </h1>
        </div>
    </header>
    <!-- este bloque de codigo hace el efecto de ola de mar en el color del la pagina ya que
    wave significa ¡hola de mar! -->
    <div class="wave">
        <div style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" 
                style="stroke: none; fill: #B7EFC5;">
                </path>
            </svg>
        </div>
    </div>

    <?php 
include_once('../../bd/db.php');
$db = new Database();
$consulta= $db->connect()->prepare('SELECT * FROM tutor INNER JOIN carrera INNER JOIN cuatrimestre INNER JOIN grupo WHERE tutor.idcarrera = carrera.idcarrera AND tutor.idcuatrimestre = cuatrimestre.idcuatrimestre AND tutor.idgrupo = grupo.idgrupo');
$row = $consulta->fetch(PDO::FETCH_NUM);

if(isset($row)){
  ?>
  <br><br><br><center>
  <table class="tabla_datos">
    <thead>
    <tr id='titulo'>
      <td>Cedula</td>
      <td>A. paterno</td>
      <td>A. materno</td>
      <td>nombre</td>
      <td>Contraseña</td>
      <td>Academia</td>
      <td>Cuatrimestre</td>
      <td>Grupo</td>
      <td>Fecha de creación</td>
      <td><a class="btn-add" href="actions/agregarT.php">Nuevo Tutor</a></td>
    </tr>
    </thead>

    <?php 
    $sql="SELECT * FROM tutor INNER JOIN carrera INNER JOIN cuatrimestre INNER JOIN grupo WHERE tutor.idcarrera = carrera.idcarrera AND tutor.idcuatrimestre = cuatrimestre.idcuatrimestre AND tutor.idgrupo = grupo.idgrupo AND idctg_tipousuario=2 ORDER BY tx_appaterno ASC";
    $result=mysqli_query($con,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
        <td><?php echo $mostrar['cedula'] ?></td>
        <td><?php echo $mostrar['tx_appaterno'] ?></td>
        <td><?php echo $mostrar['tx_apmaterno'] ?></td>
        <td><?php echo $mostrar['tx_nombreuser'] ?></td>
        <td><?php echo $mostrar['tx_password'] ?></td>
        <td><?php echo $mostrar['tx_carrera'] ?></td>
        <td><?php echo $mostrar['tx_cuatrimestre'] ?></td>
        <td><?php echo $mostrar['tx_grupo'] ?></td>
        <td><?php echo $mostrar['dt_registro'] ?></td>
        <td>
            <a class="btn-warning" href="actions/deleteT.php?id=<?php print $mostrar['id_tutor'] ?>">Eliminar</a>
             | 
            <a class="btn-mod" href="actions/modificT.php?id=<?php print $mostrar['id_tutor'] ?>">Modificar</a></td>
    </tr>
  <?php 
  }
   ?>
  </table>
  </center>
  <?php
}
?>

    <script src="../../js/script.js"></script>
</body>
</html>