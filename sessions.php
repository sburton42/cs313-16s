<?php
session_start();

?>
<!DOCTYPE html>
<html>
<body>

<h1>Fun with Sessions</h1>

<?php

	$_SESSION["name"] = "Scott Burton";
	$_SESSION["color"] = "blue";

?>

</body>
</html>
