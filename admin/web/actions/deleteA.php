<?php  

	include_once "../../../bd/db.php";
	$id = $_GET['id'];
	$query = "DELETE FROM tbl_user WHERE idtbl_user=$id";
	$res = mysqli_query($con, $query);
	if ($res) {
		?>
			<script>
				alert('Se elimino al alumno de manera correcta');
				window.location.replace("../alumnos.php");
			</script>
		<?php
	}else{
		?>
			<script>
				alert('Pasó algo inesperado, asegureses de que el alumno no tenga algun permiso en el foro');
				window.location.replace("../alumnos.php");
			</script>
		<?php
	}
?>