<?php  

include_once "../../../bd/db.php";
$id = $_GET['id'];
$query = "DELETE FROM carrera WHERE idcarrera=$id";
$res = mysqli_query($con, $query);
if ($res) {
	header('location:../carreras.php');
}
                

?>