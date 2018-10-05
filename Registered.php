<?php

include 'Layout.php';
include 'Conn.php';

$stmt = $pdo->query('INSERT INTO Users(Name, email, password) VALUES (
	"'.htmlspecialchars($_POST['name'], ENT_QUOTES).'", 
	"'.htmlspecialchars($_POST['email'], ENT_QUOTES).'", 
	"'.htmlspecialchars($_POST['password'], ENT_QUOTES).'")');
while ($row = $stmt->fetch()) {
    session_start();
    $_SESSION["uid"]=$row['uid'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Вы успешно зарегистрировались! 
</body>
</html>