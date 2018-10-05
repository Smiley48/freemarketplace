<?php

session_start();

include 'Conn.php';
include 'Layout.php';

$stmt = $pdo->query('UPDATE `Adds` SET `'.$_GET['column'].'`='.$_GET['value'].' WHERE `id`='.$_SESSION["id"].'');
$count=$stmt->rowCount()

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	    while ($count!=0) {
	    	?>
	    	Вы успешно изменили данные!
	    	<?php
	    }
	?>
</body>
</html>