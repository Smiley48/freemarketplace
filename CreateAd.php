<?php 
include 'Layout.php';
include 'Actions.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/CreatedAd.php" method='post'>
	Фото:            <input type='file' name='photo'><br>
	Описание:        <input type='text' name='description'><br>
	Что хочу взамен: <input type='text' name='exchange'><br>
	                 <input type='checkbox' name='phonenumber'>Показывать в объявлении телефон<br>
	                 <input type='checkbox' name='email'>      Показывать в объявлении email<br>
	                 <input type='checkbox' name='adress'>      Показывать в объявлении адрес<br>
<input type='submit'>
</form>
</body>
</html>