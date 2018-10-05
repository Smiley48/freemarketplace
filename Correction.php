<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	if ($_GET['column']=="Adds.photo") {
		?>
		<form action="/Correct.php" method="post">
			Колонка: <input type="text" name="column" value="Adds.photo"><br>
			Фото: <input type="file" name="value"><br>
	 	<input type="submit">
	    </form>
	    <?php
	} else if ($_GET['column']=="Adds.exchange") {
		?>
		<form action="/Correct.php" method="post">
			Колонка:                <input type="text" name="column" value="Adds.exchange"><br>
			На что хочу обменяться: <input type="text" name="value"><br>
	 	<input type="submit">
	    </form>
	    <?php
	} else {
		?>
		<form action="/Correct.php" method="post">
			Колонка:                <input type="text" name="column" value="Adds.description"><br>
			На что хочу обменяться: <input type="text" name="value"><br>
	 	<input type="submit">
	    </form>
	    <?php
	}
	?>
</body>
</html>