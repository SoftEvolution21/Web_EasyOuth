<?php  

include_once "../../../bd/db.php";
$id = $_GET['id'];
$query = "DELETE FROM tutor WHERE id_tutor=$id";
$res = mysqli_query($con, $query);
if ($res) {
	?>
		<script>
			alert('Se elimino al tutor de manera correcta');
			window.location.replace("../personal.php");
		</script>
	<?php
}
?>