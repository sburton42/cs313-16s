<?php
session_start();

?>
<!DOCTYPE html>
<html>
<body>

<h1>Session2</h1>

<?php

	$name = $_SESSION["name"];
	$color = $_SESSION["color"];

	echo "Hello $name, your color is: $color";

?>

</body>
</html>
