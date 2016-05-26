<?php

function connectToDb()
{
	try
	{
		$user = "steve";
		$password = "nerdface";

		$db = new PDO('mysql:host=127.0.0.1;dbname=movies', $user, $password);
	}
	catch (PDOException $ex) 
	{
	   echo 'Error!: ' . $ex->getMessage();
	   die(); 
	}

	return $db;
}	

?>