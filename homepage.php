<?php

// $user to be the username
$user = $_REQUEST["username"];

$user_sanitized = htmlspecialchars($user);

?>

<!DOCTYPE html>
<html>

<body>

<?php
echo "<h1>Welcome $user_sanitized</h1>";
?>
</body>

</html>