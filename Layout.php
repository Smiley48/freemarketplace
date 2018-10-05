<?php

session_start();
include 'Conn.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="/index.php">Список объявлений</a>
	<?php
	if (isset($_SESSION["uid"])) { ?>
	    <a href="/PrivateRoom.php">Личный кабинет</a><br><br>
	    <?php
	} else {
		?>
		<a href="/LogIn.php">Логин</a><br><br>
		<?php
	}
	?>
</body>
</html>
