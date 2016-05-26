<?php

function connectToDb()
{
	try
	{
		$user = "steve";
		$password = "nerdface";

		$db = new PDO('mysql:host=127.0.0.1;dbname=movies', $user, $password);

		// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	}
	catch (PDOException $ex) 
	{
	   echo 'Error!: ' . $ex->getMessage();
	   die(); 
	}

	return $db;
}	

?>