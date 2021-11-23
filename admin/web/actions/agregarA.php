
<?php
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
            if($matricula=="" and $nombre=="" and $apellidop=="" and $apellidom=="" and $turno=="" and $contraseña==""){
    ?>
        <script>
            alert('Error de registro, sucedio algo inesperado');
            window.location.replace("../reg_datos.php");
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

            $query = "INSERT INTO tbl_user(idtbl_user, matriculauser, tx_nombreuser, tx_appaterno, tx_apmaterno, tx_password, turno, dt_registro, tutor, idctg_tipousuario, idcarrera, idcuatrimestre, idgrupo) 
            values('0','".$matricula."','".$nombre."','".$apellidop."','".$apellidom."','".$contraseña."','".$turno."',NOW(),'','3','".$carrera."','". $cuatrimestre."','".$grupo."');";
            $res = mysqli_query($con, $query);
                if ($res) {
                ?>
                    <script>
                        alert('Registro exitoso');
                        window.location.replace("../alumnos.php");
                    </script>
                <?php
                
                } else {
                ?>
                    <script>
                        alert('Error de registro, sucedio algo inesperado');
                        window.location.replace("../reg_datos.php");
                    </script>
        <?php

                }
            }  
            }
        }
        ?>

    