<?php

// get the number of visits from the cookie and store it in variable: $visits

$count;

// if cookie hasn't been defined
if (!isset($_COOKIE["pageCount"]))
{
	$count = 1;
}
else
{
	$count = $_COOKIE["pageCount"];
	$count++;
}

// set the cookie with the new updated value
setcookie("pageCount", $count, time() + 1000);

?>
<!DOCTYPE html>
<html>
<body>

<h1>Fun with Cookies</h1>

<?php

// display the visits variable
echo "You have visited this page $count time(s)";



?>

</body>
</html>
