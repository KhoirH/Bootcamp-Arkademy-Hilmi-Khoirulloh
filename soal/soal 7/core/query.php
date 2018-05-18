<?php

class query extends database
{
	private $table;
	public 	$query,
	//abstract variable
	$arr = array() ;
	//selec table
	public function table($table)
	{
		return $this->table= $table;
	}
	//query select
	public function select($sql=false ,$table= false)
	{
		$this->table = ($table) ? $table :$this->table;

		if ($sql) {
			$sql = implode(",", $sql);
			$this->query = "SELECT $sql FROM ".$this->table;

		}else{
			$this->query =  "SELECT * FROM ".$this->table;

		}
		return $this;
	}
	//query where
	public function where($where,$bride = false,$method = false)
	{
		$method= ($method) ? " ".$method." " :" = ";
		$key = implode($method,array_keys($where));

		foreach ($where as $key => $value) {

				$this->arr[] = $value;

			$arr[] = $key ." ". $method." ?";

		}
		$isi = implode(" ".$bride." ", $arr);
		$this->query .=  " where $isi" ;
		return $this ;
	}
	//query 
	public function join($table_join, $join_1, $join_2)
	{
		$this->query .= " JOIN $table_join ON $table_join.".$join_2." = ".$this->table.".$join_1 ";
		return $this;
	}
	//execute query
	public function run()
	{

		$run = $this->koneksi->prepare($this->query);
		$run->execute($this->arr);

		$this->arr = array();
		return $run;

	}
	//execute query and get one fetch

	public function one()
	{
		$set = $this->run();
		$result = $set->fetch(PDO::FETCH_OBJ);
		return $result;
	}
	//execute query and get all fetch

	public function all()
	{
		$set = $this->run();
		$result = $set->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}



}

 ?>
