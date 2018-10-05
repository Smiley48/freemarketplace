<?php

include 'Layout.php';
?>
<form action="/Registered.php" method="post">
	ФИО: <input type="text" name="name"><br>
	E-mail: <input type="email" name="email"><br>
	Пароль: <input type="password" name="password"><br>
	Повторите пароль: <input type="password" name="password"><br>
 	<input type="submit">
 </form>