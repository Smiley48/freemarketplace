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

	$stmt = $pdo->query('SELECT Users.`Name`, Users.`phonenumber`, Users.`email`, Users.`adress`, Users.`password`, Users.`aboutme` FROM Users WHERE Users.`uid`="'.$_SESSION["uid"].'"');
	while ($row = $stmt->fetch()) {
	 	$Name       =htmlspecialchars_decode($row['Name'], ENT_QUOTES);
	    $phonenumber=htmlspecialchars_decode($row['phonenumber'], ENT_QUOTES);
	    $email      =htmlspecialchars_decode($row['email'], ENT_QUOTES);
	    $password   =htmlspecialchars_decode($row['password'], ENT_QUOTES);
	    $aboutme    =htmlspecialchars_decode($row['aboutme'], ENT_QUOTES);
	    $adress     =htmlspecialchars_decode($row['adress'], ENT_QUOTES);
	}
    echo "<form action='/ChangedInfo.php' method='post'>
	    Имя:     <input type='text' name='Name' value=".$Name."><br>
		Телефон: <input type='text' name='phonenumber' value=".$phonenumber."><br>
		Email:   <input type='text' name='email' value=".$email."><br>
		Пароль:  <input type='text' name='password' value=".$password."><br>
		Обо мне: <input type='text' name='aboutme' value=".$aboutme."><br>
		Адрес: <input type='text' name='adress' value=".$adress."><br>
	 <input type='submit'>
	   </form>";
	   ?>
</body>
</html>