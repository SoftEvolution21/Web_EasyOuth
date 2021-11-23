<?php
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

    $query = "INSERT INTO tutor(id_tutor, cedula, tx_nombreuser, tx_appaterno, tx_apmaterno, tx_password, dt_registro, idctg_tipousuario, idcarrera, idcuatrimestre, idgrupo) 
    values('0','".$cedula."','".$nombre."','".$apellidop."','".$apellidom."','".$contraseña."',NOW(),'2','".$carrera."','". $cuatrimestre."','".$grupo."');";
    
    $consulta = "UPDATE tbl_user SET tutor='".$cedula."' WHERE (idcarrera = $carrera && idcuatrimestre = $cuatrimestre && idgrupo=$grupo)";

    $res = mysqli_query($con, $query);
    $resul = mysqli_query($con, $consulta);
        if ($res) {
            ?>
                <script>
                    alert('Registro exitoso');
                    window.location.replace("../personal.php");
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
?>