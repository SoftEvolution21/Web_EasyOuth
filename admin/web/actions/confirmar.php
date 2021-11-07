<?php 
include_once "../../../bd/db.php";
$id = $_GET['id'];
$observacion = trim($_POST['observaciones']);
$query = "UPDATE solicitudpermiso_tbl_user SET observaciones='".$observacion."', dt_solicitud=NOW(), tx_statuspermiso='Autorizado' WHERE (idsolicitudpermiso=$id)";
$res = mysqli_query($con, $query);
if ($res) {
	header('location:../../index.php');
}
?>