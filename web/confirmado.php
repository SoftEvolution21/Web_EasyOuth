<?php 

if (isset($_POST['guardar'])) {
	$observaciones=$_REQUEST['observaciones'];
	if($observaciones==""){
		?>
			<script>
				alert('Se debe dar una observación');
				window.location.replace("tutor.php");
			</script>
		<?php
	}else{
		include_once "../bd/db.php";
		$id = $_GET['id'];
		$observacion = trim($_POST['observaciones']);
		$query = "UPDATE solicitudpermiso_tbl_user SET observaciones='".$observacion."', tx_statuspermiso='En espera' WHERE (idsolicitudpermiso=$id)";
		$res = mysqli_query($con, $query);
		if ($res) {
			?>
				<script>
					alert('El permiso esta en espera');
					window.location.replace("tutor.php");
				</script>
			<?php
		}
	}
}
if (isset($_POST['eliminar'])) {
	$observaciones=$_REQUEST['observaciones'];
	if($observaciones==""){
		?>
			<script>
				alert('Se debe dar una observación');
				window.location.replace("tutor.php");
			</script>
		<?php
		include('tutor.php');
	}else{
		include_once "../bd/db.php";
		$id = $_GET['id'];
		$observacion = trim($_POST['observaciones']);
		$query = "UPDATE solicitudpermiso_tbl_user SET dt_solicitud=NOW(), tx_statuspermiso='Rechazado' WHERE (idsolicitudpermiso=$id)";
		$res = mysqli_query($con, $query);
		if ($res) {
			?>
				<script>
					alert('El permiso fue rechazado');
					window.location.replace("tutor.php");
				</script>
			<?php
		}
	}
}
?>