<?php
include 'Layout.php';
include 'Conn.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	global $pdo;
	$stmt = $pdo->query('INSERT INTO Adds(uid, description, exchange, phonenumber, email, adress, photo) VALUES 
		("'.$_SESSION["uid"].'", 
		"'.htmlspecialchars($_POST['description'], ENT_QUOTES).'", 
		"'.htmlspecialchars($_POST['exchange'], ENT_QUOTES).'", 
		"'.htmlspecialchars($_POST['phonenumber'], ENT_QUOTES).'", 
		"'.htmlspecialchars($_POST['email'], ENT_QUOTES).'", 
		"'.htmlspecialchars($_POST['adress'], ENT_QUOTES).'", 
		"'.htmlspecialchars($_POST['photo'], ENT_QUOTES).'")');
	?>
	Вы успешно создали объявление!
</body>
</html>