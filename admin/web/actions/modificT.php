<?php  
    include_once "../../../bd/db.php";
    $id = $_GET['id'];
    $queryd = "SELECT * FROM tutor WHERE id_tutor=$id";
    $resd = mysqli_query($con, $queryd);

    if (isset($_REQUEST['guardar'])) {
            $cedula = trim($_POST['cedula']);
            $nombre = trim($_POST['nombre']);
            $apellidop = trim($_POST['apellidop']);
            $apellidom = trim($_POST['apellidom']);
            $contraseña = trim($_POST['contraseña']);
            $carrera = trim($_POST['carrera']);
            $cuatrimestre = trim($_POST['cuatrimestre']);
            $grupo = trim($_POST['grupo']);
        if($cedula=="" and $nombre=="" and $apellidop=="" and $apellidom=="" and $contraseña=="" and $carrera=="" and $cuatrimestre=="" and $grupo==""){
            ?>
                <script>
                    alert('Debe llenar los campos');
                    window.location.replace("../personal.php");
                </script>
            <?php
        }else{
        if (isset($_POST['nombre'])) {
            $cedula = trim($_POST['cedula']);
            $nombre = trim($_POST['nombre']);
            $apellidop = trim($_POST['apellidop']);
            $apellidom = trim($_POST['apellidom']);
            $contraseña = trim($_POST['contraseña']);
            $carrera = trim($_POST['carrera']);
            $cuatrimestre = trim($_POST['cuatrimestre']);
            $grupo = trim($_POST['grupo']);

            include_once "../../../bd/db.php";

            $query = "UPDATE tutor SET cedula='".$cedula."', tx_nombreuser='".$nombre."', tx_appaterno='".$apellidop."', tx_apmaterno='".$apellidom."', tx_password='".$contraseña."', idcarrera='".$carrera."', idcuatrimestre='".$cuatrimestre."', idgrupo='".$grupo."', dt_registro=NOW()
            WHERE (id_tutor=$id)";
            $res = mysqli_query($con, $query);
            if ($res) {
                ?>
                <script>
                    alert('Datos actualizados correctamente');
                    window.location.replace("../personal.php");
                </script>
            <?php
            }else{
                ?>
                    <script>
                        alert('Algo salio mal');
                        window.location.replace("../modA.php");
                    </script>
                <?php    
            }
        }  
        }
    }
?>