<?php
include_once('bd/db.php');
session_start();


if (isset($_GET['cerrar_sesion'])) {
	# code...
	session_unset();
	session_destroy();
}

if (isset($_POST['nombre']) && isset($_POST['passwd'])) {
	$nombre=$_REQUEST['nombre'];
	$passwd=$_REQUEST['passwd'];

	$db = new Database();
	$consulta= $db->connect()->prepare('SELECT*FROM tbl_user where matriculauser = :nombre and tx_password= :passwd');
	$consulta->execute(['nombre'=> $nombre, 'passwd'=>$passwd]);

	$row = $consulta->fetch(PDO::FETCH_NUM);

	if ($row==true) {
		# code...
		$rol = $row[9];
		$_SESSION['rol']=$rol;

		switch ($_SESSION['rol']) {
		case 1:
			# code...
			header('location: admin/index.php');
		break;

		case 2:
			# code...
			header('location: web/tutor.php?nombre='.$nombre);
			print $nombre;
		break;
		
		default:
	}

	}
}

if (isset($_POST['nombre']) && isset($_POST['passwd'])) {
	$nombre=$_REQUEST['nombre'];
	$passwd=$_REQUEST['passwd'];

	$db = new Database();
	$consulta= $db->connect()->prepare('SELECT*FROM tutor where cedula = :nombre and tx_password= :passwd');
	$consulta->execute(['nombre'=> $nombre, 'passwd'=>$passwd]);

	$row = $consulta->fetch(PDO::FETCH_NUM);

	if ($row==true) {
		# code...
		$rol = $row[7];
		$_SESSION['rol']=$rol;
		$num_s=$nombre;

		switch ($_SESSION['rol']) {
		case 1:
			# code...
			header('location: admin/index.php');
		break;

		case 2:
			# code...
			?>
				<script> 
                    window.location.replace("web/tutor.php");
                </script>
			<?php
			session_start();

			$_SESSION["nombre"] = $nombre;
			
		break;
		
		default:
	}

	}else{
		?>
			<script>
				alert('No se puede iniciar sesión con esas credenciales');
			</script>
		<?php
		include('index.html');	
	}
}