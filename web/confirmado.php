<?php 

if (isset($_POST['guardar'])) {
	$observaciones=$_REQUEST['observaciones'];
	if($observaciones==""){
		?>
		<h1 style="background-color: red; color: white;">Se debe dar una observación</h1>

		<?php
		include('tutor.php');
	}else{
		include_once "../bd/db.php";
		$id = $_GET['id'];
		$observacion = trim($_POST['observaciones']);
		$query = "UPDATE solicitudpermiso_tbl_user SET observaciones='".$observacion."', dt_solicitud=NOW(), tx_statuspermiso='En espera' WHERE (idsolicitudpermiso=$id)";
		$res = mysqli_query($con, $query);
		if ($res) {
			header('location:tutor.php');
		}
	}
}
if (isset($_POST['eliminar'])) {
	$observaciones=$_REQUEST['observaciones'];
	if($observaciones==""){
		?>
		<h1 style="background-color: red; color: white;">Se debe dar una observación</h1>

		<?php
		include('tutor.php');
	}else{
		include_once "../bd/db.php";
		$id = $_GET['id'];
		$observacion = trim($_POST['observaciones']);
		$query = "UPDATE solicitudpermiso_tbl_user SET dt_solicitud=NOW(), tx_statuspermiso='Rechazado' WHERE (idsolicitudpermiso=$id)";
		$res = mysqli_query($con, $query);
		if ($res) {
			header('location: tutor.php');
		}
	}
}
?>