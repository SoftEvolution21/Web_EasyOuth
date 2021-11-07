<?php  

include_once "../../../bd/db.php";
$id = $_GET['id'];
$query = "DELETE FROM grupo WHERE idgrupo=$id";
$res = mysqli_query($con, $query);
if ($res) {
	header('location:../grupos.php');
}
                

?>