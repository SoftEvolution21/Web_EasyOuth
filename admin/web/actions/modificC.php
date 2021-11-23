<?php  
    include_once "../../../bd/db.php";
    $id = $_GET['id'];

    if (isset($_REQUEST['guardar'])) {
        $carrera = trim($_POST['carrera']);
        if($carrera==""){
            ?>
                <script>
                    alert('Debe llenar los campos');
                    window.location.replace("../carreras.php");
                </script>
            <?php
        }else{
        if (isset($_POST['carrera'])) {
            $carrera = trim($_POST['carrera']);

            include_once "../../../bd/db.php";

            $query = "UPDATE carrera SET tx_carrera='".$carrera."'
            WHERE (idcarrera=$id)";
            $res = mysqli_query($con, $query);
            if ($res) {
                ?>
                    <script>
                        alert('Datos actualizados correctamente');
                        window.location.replace("../carreras.php");
                    </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Algo salio mal');
                    window.location.replace("../carreras.php");
                </script>
    <?php

            }
        }  
        }
    }