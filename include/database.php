<?php

class db {

	public static function connect() {
		$server = 'localhost';
		$login = 'raxil22_test';
		$password = 'test';
		$db_name = 'raxil22_test';
		
		$connect = new mysqli($server, $login, $password, $db_name);
		if($connect == FALSE)
			echo 'Problem with connect DB';
		else
			return $connect;
	}
	
	
}



?>