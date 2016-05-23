<?php

try
{
	//require("dbCredentials.php");
   $user = 'steve';
   $password = 'nerdface'; 
   $db = new PDO('mysql:host=127.0.0.1;dbname=movies', $user, $password);
}
catch (PDOException $ex) 
{
   echo 'Error!: ' . $ex->getMessage();
   die(); 
}


?>
<!DOCTYPE html>
<html>

<body>
	<h1>Movie Database</h1>

	<ul>
<?php

$stmt = $db->prepare('SELECT title FROM movie WHERE id=:id');
$stmt->bindValue(':id', 2, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($rows as $row)
{
	echo '<li>' . $row['title'] . '</li>';
}

?>
	</ul>

</body>

</html>
