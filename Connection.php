<?php

class Connection{

	public function __construct(){

		$conn = new PDO("mysql:host=localhost;dbname=ctg-323","root","");

		if($conn){
			echo "Connected";
		}
	}
}

$con = new Connection();

?>
