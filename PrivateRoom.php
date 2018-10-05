<?php
include 'Layout.php';
include 'Conn.php';
include 'Actions.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	$stmt = $pdo->query('SELECT Name, phonenumber, email, adress, password, aboutme FROM Users WHERE uid="'.$_SESSION["uid"].'"');
	while ($row = $stmt->fetch()) {
	 	$Name=$row['Name'];
	    $phonenumber=$row['phonenumber'];
	    $email=$row['email'];
	    $password=$row['password'];
	    $aboutme=$row['aboutme'];
	    $adress=$row['adress'];
	    echo "".$Name."\n".$phonenumber."\n".$email."\n".$password."\n".$aboutme."\n".$adress."\n\n";
	}

	?>

    <a href="/UserInfo.php">Изменить персональные данные</a>

    <a href="/CreateAd.php">Создать объявление</a>

	<?php

	$scndstmt = $pdo->query('SELECT Users.`Name`, Users.`phonenumber`, Users.`email`, Users.`adress`, Adds.`id`, Adds.`phonenumber`, Adds.`email`, Adds.`adress`, Adds.`exchange`, Adds.`active`, Adds.`description` FROM Users, Adds WHERE Users.`uid`="'.$_SESSION["uid"].'" AND Adds.`uid`="'.$_SESSION["uid"].'" ORDER BY `id` DESC');

	?>
	<table>
		<tr>
			<th>Пользователь</th>
			<th>Фото</th>
			<th>Объявление</th>
			<th>На что готов(-а) поменяться</th>
			<th>Телефон</th>
			<th>E-mail</th>
			<th>Адрес</th>
		</tr>
		<?php
        while ($scndrow = $scndstmt->fetch()) {
        	if (!($row['blocked'])) {
                while ($row['active']) {
                	$_SESSION['id']=$row['id'];
                	?>
                	<tr>
                		<th><?php echo $scndrow['Name']; ?></th>
                		<th><?php echo $scndrow['photo']; 
                		          echo "\n";
                		          echo ' <a href="/Correction.php?$column="Adds.`photo`"">Редактировать</a>'; 
                		          ?></th>
                		<th><?php echo $scndrow['description']; 
                		          echo "\n";
                		          echo ' <a href="/Correction.php?$column="Adds.`description`"">Редактировать</a>';
                		          ?>
                			<form action="deactivation" method="post">
                				    Деактивировать объявление? <input type="checkbox" name="active">
                				<input type="submit">
                			</form>
                		</th>
                		<th><?php echo $scndrow['exchange']; 
                		          echo "\n";
                		          echo ' <a href="/Correction.php?$column="Adds.`exchange`"">Редактировать</a>'; 
                		          ?></th>
                		<th>
                		<?php
                		if ($row['phonenumber']) {
                			echo $scndrow['phonenumber'];
                		}
                		?>
                		</th>
                		<th>
                		<?php
                		if ($row['email']) {
                			echo $scndrow['email'];
                		}
                		?>
                		</th>
                		<th>
                		<?php
                		if ($row['adress']) {
                			echo $scndrow['adress'];
                		}
                		?>
                		</th>

                	</tr>
                	<?php
                }
            }
        }
		?>
	</table>

 </form>
</body>
</html>

