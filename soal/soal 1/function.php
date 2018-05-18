<?php 
//Name Classs
class Biodata 
{
	public $data = [];
	
// function name
	public function name($name)
	{
		$this->data["name"] = $name;
		return $this;
	}
// function addres
	public function address($address)
	{
		$this->data["address"] = $address;
		return $this;
	}
// function hobbies
	public function hobbies($hobbies = array())
	{
		$this->data["hobbies"] = $hobbies;
		return $this;

	}
// function is_married
	public function is_married($is_married)
	{
		$this->data["is_married"] = $is_married;
		return $this;
	} 
// function school
	public function school($school = array())
	{
		$this->data["school"] = $school;
		return $this;
	}
// function skills
	public function skills($skills = array())
	{
		$this->data["skills"] = $skills;
		return $this;
	} 
// function run 
	// public function biodata($name)
	// {

	// }
	public function result()
	{
		return json_encode($this->data);
	}
}

$biodata = new Biodata();	
$hobbies = ["swim" ,"learning"];
$school = ["SMA/SMK" => "SMKN 1 Kedawung"];
$skills = ["Something" => "power" , "Something_2" => "power"];

$test_one = $biodata->name("hilmi Khoirulloh")
				->address("hilman")
				->hobbies($hobbies)
				->is_married(true)
				->school($school)
				->skills($skills)
				->result();
 ?>