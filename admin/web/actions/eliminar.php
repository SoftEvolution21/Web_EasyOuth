<?php
    include_once "../../../bd/db.php";
    $query = "DELETE FROM solicitudpermiso_tbl_user";
    $res = mysqli_query($con, $query);
    if ($res) {
        ?>
            <script>
                alert("¡Se han eliminado los permisos del cuatrimestre!"); 
                window.location.replace("../permisos_aceptados.php");
            </script>
        <?php
        include_once "../../../bd/db.php";
        $query = "ALTER TABLE solicitudpermiso_tbl_user AUTO_INCREMENT = 1";
        $res = mysqli_query($con, $query);
    }
?>