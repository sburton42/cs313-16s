<?php
$contents = file_get_contents("messages.txt");

?>
<!DOCTYPE html>
<html>
<body>

<h1>Messages</h1>

<?php echo $contents; ?>

</body>
</html>