<?php

$con = mysqli_connect("localhost","root","","permisos_p"); 

class Database
{
	private $host;
	private $db;
	private $user;
	private $password;
	private $charset;

	
	public function __construct()
	{
		$this->host = 'localhost';
		$this->db = 'permisos_p';
		$this->user = 'root';
		$this->password = '';
		$this->charset = 'utf8mb4';
	}

	function connect(){
		try{
			$connection = "mysql:host=" . $this->host . ";dbname=" . $this->db .";user=" . $this->user . ";password=" . $this->password;
			$options = [
				PDO::ATTR_ERRMODE				=> PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES		=> false,
			];

			$pdo = new PDO($connection, $this->user, $this->password, $options);

			return $pdo;
		}catch(PDOException $e){
			print_r('Error connection: ' . $e->getMessage());
		}
	}
}


?>