<?php  

include_once "../../../bd/db.php";
$id = $_GET['id'];
$query = "DELETE FROM tbl_user WHERE idtbl_user=$id";
$res = mysqli_query($con, $query);
if ($res) {
	?>
		<script>
			alert('Se elimino al Docente de manera correcta');
			window.location.replace("../personal.php");
		</script>
	<?php
}
?>