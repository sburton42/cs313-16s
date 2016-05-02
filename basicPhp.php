<!DOCTYPE html>
<html>
<body>

<?php

for ($i = 0; $i < 10; $i++)
{
	$userCount = $i + 1;

	echo "<div>This is div $userCount</div>\n";
}

echo "<br /><br /><div>";

$words = array("green", "eggs", "and", "ham");

foreach ($words as $word)
{
	echo "$word<br />";
}

for ($i = 0; $i < sizeof($words); $i++)
{
	echo "At index $i we have $words[$i]<br />";
}

$words[12] = "by";
$words["author"] = "Dr.";
$words[] = "Seuss";


foreach ($words as $word)
{
	echo "$word<br />";
}

foreach ($words as $key => $word)
{
	echo "The key is: $key, the value is: $word<br />";
}

echo sizeof($words);



echo "</div>"


?>

</body>
</html>
