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
}





?>