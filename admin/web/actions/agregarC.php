
<?php
    if (isset($_REQUEST['guardar'])) {
        $carrera = trim($_POST['carrera']);
            if($carrera==""){
                ?>
                    <script>
                        alert('Error de registro, Debe llenar todos los campos');
                        window.location.replace("../reg_datos.php");
                    </script>
                <?php
            }else{
                if (isset($_POST['carrera'])) {
                    $carrera = trim($_POST['carrera']);

                    include_once "../../../bd/db.php";

                    $query = "INSERT INTO carrera(idcarrera, tx_carrera) 
                    values('0','".$carrera."');";
                    $res = mysqli_query($con, $query);
                        if ($res) {
                            ?>
                                <script>
                                    alert('Registro Exitoso');
                                    window.location.replace("../carreras.php");
                                </script>
                            <?php
                            
                        } else {
                            ?>
                                <script>
                                    alert('Error de registro, Debe llenar todos los campos');
                                    window.location.replace("../reg_datos.php");
                                </script>
                            <?php

                        }
                }  
            }
        }
    ?>
?>