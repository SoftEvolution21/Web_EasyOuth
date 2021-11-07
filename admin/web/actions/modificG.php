<?php  
include_once "../../../bd/db.php";
$id = $_GET['id'];
$queryd = "SELECT * FROM grupo WHERE idgrupo=$id";
$resd = mysqli_query($con, $queryd);
while($mostrar=mysqli_fetch_array($resd)){
?>

<html lang="en">

<head>
    <title></title>
    <link rel="stylesheet" href="../../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
    <div class="container">
        <nav>
            <a href="#" id="icono" class="icono"><img src="../../../img/menu-alt-right-regular-24.png" class="img-icon"></a>
            <div class="enlaces uno" id="enlaces">
                <a href="../index.php">Inicio Administrador</a>
                <a href="../alumnos.php">Alumnos</a>
                <a href="../carreras.php">Carreras</a>
                <a href="../grupos.php">Grupos</a>
                <a href="../tutores.php">Tutores</a>
                <a href="cerrars.php">Cerrar Sesión</a>
            </div>
        </nav>
    </div>

    <div>
        <h1>
            Modificar Grupo
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
    <center>
    <form method="post">
        <input type="text" name="grupo" value="<?php echo $mostrar['tx_grupo'] ?>"><br><br>
        

            <button type="submit" class="btn-mod" name="guardar">Guardar</button>
    </form>
    </center>
    <?php }
    if (isset($_REQUEST['guardar'])) {
        $grupo = trim($_POST['grupo']);
        if($grupo==""){
            ?>
                <h1 style="background-color: #FF9185;
                font-size: 12px;
                padding: 10px;">Asegurese de llenar campos</h1>
            <?php
        }else{
        if (isset($_POST['grupo'])) {
            $grupo = trim($_POST['grupo']);

            include_once "../../../bd/db.php";

            $query = "UPDATE grupo SET tx_grupo='".$grupo."'
            WHERE (idgrupo=$id)";
            $res = mysqli_query($con, $query);
            if ($res) {
                ?>
                <script>
                    window.location.replace("../grupos.php");
                </script>
            <?php
            } else {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    Error <?php echo mysqli_error($con); ?>
                </div>
    <?php

            }
        }  
        }
    }
    ?>
    <script src="../../../js/script.js"></script>
</body>

</html> 