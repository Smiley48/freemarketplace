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
	$stmt = $pdo->query('UPDATE `Users` SET 
		`Name`="'.htmlspecialchars($_POST['Name'], ENT_QUOTES).'", 
		`email`="'.htmlspecialchars($_POST['email'], ENT_QUOTES).'", 
		`password`="'.htmlspecialchars($_POST['password'], ENT_QUOTES).'", 
		`phonenumber`="'.htmlspecialchars($_POST['phonenumber'], ENT_QUOTES).'", 
		`aboutme`="'.htmlspecialchars($_POST['aboutme'], ENT_QUOTES).'", 
		`adress`="'.htmlspecialchars($_POST['adress'], ENT_QUOTES).'" 
		WHERE `uid`="'.$_SESSION["uid"].'"');

	?>
	Вы успешно изменили свои данные!
</body>
</html>