<?php 
// koneksi
class database 
{
	public $koneksi;
	private $user = 'root',
			$password = '',
			$server = 'localhost',
			$db_name = 'soal_6';
	function __construct()
	{
		try {
			$this->koneksi=  new PDO("mysql:host=".$this->server.";dbname=".$this->db_name,$this->user,$this->password);
			$this->koneksi->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	return $this->koneksi;
	}
}

 ?>