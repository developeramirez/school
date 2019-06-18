<?php 

/**
 *Concexion a bd schooldb 
 */
class Connection 
{
	$username = 'root';
    $password = 'romero17B*';
    $host = 'localhost';
    $database = 'schooldb';

    public $conetion;

    public function getConnection(){
    	this->conetion = null;

	    try {
			$this->conetion = new PDO("mysql:host={$host};dbname={$database}; charset=utf8", $username,$password);
		$this->conetion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	    } catch (PDOException $e) {
		echo $e->getMessage();
	    }
	    return $this->conetion;
    }
}
?>