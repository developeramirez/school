<?php 

/**
 * Class Student from create nuew Student
 */
class Student
{
	private $conetion;
	private $student = "student";

	private $id;
	private $codigo;
	private $fullname;
	private $birthdate;
	private $is_active;
	
	public function __construct($conetion)
	{
		$this->conetion = $conetion;
	}
	public function create() {

	}
	public function read(){
		$query = 'SELECT * from student';
		$stmt = $this->conetion->prepare($query);
		$stmt = execute();
		return $stmt;
	}
	public function update(){}
	public function delete(){}
}





?>