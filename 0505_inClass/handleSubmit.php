<?php

$user = htmlspecialchars($_POST["user"]);
$comment = htmlspecialchars($_POST["comment"]);

$line = "$user - $comment\n";

//echo "Trying to save $line to a file\n";

// append this line to the file
file_put_contents("messages.txt", $line, FILE_APPEND);

// redirect to the messages page
header('Location: messages.php');

?>