<?php
include 'Layout.php';
include 'Conn.php';

$stmt = $pdo->query('SELECT `uid` FROM Users WHERE 
	`password` = "'.htmlspecialchars($_POST['password'], ENT_QUOTES).'" AND 
	`email` = "'.htmlspecialchars($_POST['email'], ENT_QUOTES).'"');
if ($row = $stmt->fetch()) {
    $_SESSION["uid"]=$row['uid'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (isset($_SESSION['uid'])) { ?>
    <br><br>
    Вы успешно вошли в свою учётную запись
    <?php
} else {
	?>
	<br><br>
	Данный E-mail и пароль не найдены в нашей базе!<br>
	Проверьте раскладку и не активирована ли клавиша Caps Lock.<br><br>
	<a href="/Registration.php">Регистрация</a>
	<?php
}
?>
</body>
</html>
