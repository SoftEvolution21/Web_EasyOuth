<?php  
    include_once "../../../bd/db.php";
    $id = $_GET['id'];

    if (isset($_REQUEST['guardar'])) {
        $matricula = trim($_POST['matricula']);
            $nombre = trim($_POST['nombre']);
            $apellidop = trim($_POST['apellidop']);
            $apellidom = trim($_POST['apellidom']);
            $contraseña = trim($_POST['contraseña']);
        if($matricula=="" and $nombre=="" and $apellidop=="" and $apellidom=="" and $usuario=="" and $contraseña==""){
            ?>
                <script>
                    alert('Debe llenar los campos');
                    window.location.replace("../personal.php");
                </script>
            <?php
        }else{
        if (isset($_POST['matricula'])) {
            $matricula = trim($_POST['matricula']);
            $nombre = trim($_POST['nombre']);
            $apellidop = trim($_POST['apellidop']);
            $apellidom = trim($_POST['apellidom']);
            $contraseña = trim($_POST['contraseña']);

            include_once "../../../bd/db.php";

            $query = "UPDATE tbl_user SET matriculauser='".$matricula."', tx_nombreuser='".$nombre."', tx_appaterno='".$apellidop."', tx_apmaterno='".$apellidom."', tx_password='".$contraseña."', dt_registro=NOW()
            WHERE (idtbl_user=$id)";
            $res = mysqli_query($con, $query);
            if ($res) {
                ?>
                    <script>
                        alert('Datos actualizados correctamente');
                        window.location.replace("../personal.php");
                    </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Algo salio mal');
                    window.location.replace("../personal.php");
                </script>
            <?php

            }
        }  
        }
    }