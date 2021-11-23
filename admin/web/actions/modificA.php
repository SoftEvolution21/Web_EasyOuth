<?php 
    include_once "../../../bd/db.php";
    $id = $_GET['id'];

    if (isset($_REQUEST['guardar'])) {
        $matricula = trim($_POST['matricula']);
            $nombre = trim($_POST['nombre']);
            $apellidop = trim($_POST['apellidop']);
            $apellidom = trim($_POST['apellidom']);
            $turno = trim($_POST['turno']);
            $contraseña = trim($_POST['contraseña']);
            $carrera = trim($_POST['carrera']);
            $cuatrimestre = trim($_POST['cuatrimestre']);
            $grupo = trim($_POST['grupo']);
        if($matricula=="" and $nombre=="" and $apellidop=="" and $apellidom=="" and $usuario=="" and $contraseña==""){
            ?>
                <script>
                    alert('Debe llenar los campos');
                    window.location.replace("../alumnos.php");
                </script>
            <?php
        }else{
        if (isset($_POST['matricula'])) {
            $matricula = trim($_POST['matricula']);
            $nombre = trim($_POST['nombre']);
            $apellidop = trim($_POST['apellidop']);
            $apellidom = trim($_POST['apellidom']);
            $turno = trim($_POST['turno']);
            $contraseña = trim($_POST['contraseña']);
            $carrera = trim($_POST['carrera']);
            $cuatrimestre = trim($_POST['cuatrimestre']);
            $grupo = trim($_POST['grupo']);

            include_once "../../../bd/db.php";

            $query = "UPDATE tbl_user SET matriculauser='".$matricula."', tx_nombreuser='".$nombre."', tx_appaterno='".$apellidop."', tx_apmaterno='".$apellidom."', tx_password='".$contraseña."', turno='".$turno."', dt_registro=NOW(), idcarrera='".$carrera."', idcuatrimestre='".$cuatrimestre."',idgrupo='".$grupo."' WHERE (idtbl_user=$id)";
            $res = mysqli_query($con, $query);
            if ($res) {
                ?>
                    <script>
                        alert('Datos actualizados correctamente');
                        window.location.replace("../alumnos.php");
                    </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Algo salio mal');
                    window.location.replace("../alumnos.php");
                </script>
            <?php

            }
        }  
        }
    }
?>


    