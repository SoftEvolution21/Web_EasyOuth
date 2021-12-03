<?php 

if (isset($_POST['guardar'])) {
	$observaciones=$_REQUEST['observaciones'];
	if($observaciones==""){
		?>
		<script>
            alert('Se debe dar una observación');
            window.location.replace("index.php");
        </script>

		<?php
		include('index.php');
	}else{
		include_once "../bd/db.php";
		$id = $_GET['id'];
		$observacion = trim($_POST['observaciones']);
		$query = "UPDATE solicitudpermiso_tbl_user SET observaciones='".$observacion."', dt_solicitud=NOW(), tx_statuspermiso='Autorizado' WHERE (idsolicitudpermiso=$id)";
		$res = mysqli_query($con, $query);
		if ($res) {
			header('location:index.php');
		}
	}
}
if (isset($_POST['eliminar'])) {
	$observaciones=$_REQUEST['observaciones'];
	if($observaciones==""){
		?>
			<script>
				alert('Se debe dar una observación');
				window.location.replace("index.php");
			</script>
		<?php
		include('index.php');
	}else{
		include_once "../bd/db.php";
		$id = $_GET['id'];
		$observacion = trim($_POST['observaciones']);
		$query = "UPDATE solicitudpermiso_tbl_user SET dt_notificado=NOW(), tx_statuspermiso='Rechazado' WHERE (idsolicitudpermiso=$id)";
		$res = mysqli_query($con, $query);
		if ($res) {
			?>
				<script>
					alert('El permiso fue rechazado');
					window.location.replace("index.php");
				</script>
			<?php
		}
	}
}
?>