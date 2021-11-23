
<?php
    if (isset($_REQUEST['guardar'])) {
        $matricula = trim($_POST['matricula']);
        $nombre = trim($_POST['nombre']);
        $apellidop = trim($_POST['apellidop']);
        $apellidom = trim($_POST['apellidom']);
        $contraseña = trim($_POST['contraseña']);
            if($matricula=="" and $nombre=="" and $apellidop=="" and $apellidom=="" and $contraseña==""){
    ?>
        <script>
            alert('Error de registro, Debe llenar todos los campos');
            window.location.replace("../reg_datos.php");
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

                    $query = "INSERT INTO tbl_user(idtbl_user, matriculauser, tx_nombreuser, tx_appaterno, tx_apmaterno, tx_password, turno, dt_registro, tutor, idctg_tipousuario) 
                    values('0','".$matricula."','".$nombre."','".$apellidop."','".$apellidom."','".$contraseña."','',NOW(),'','4');";
                    $res = mysqli_query($con, $query);
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
                                alert('Error de registro, pasó algo inesperado');
                                window.location.replace("../reg_datos.php");
                            </script>
                <?php

                        }
                    }  
                    }
                }
                ?>