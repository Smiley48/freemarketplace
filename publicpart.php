<?php

include 'conn.php';
include 'layout.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	$stmt = $pdo->query('SELECT `Users.Name`, `Users.phonenumber`, `Users.email`, `Users.adress`, `Adds.phonenumber`, `Adds.email`, `Adds.adress`, `Adds.exchange`, `Adds.active`, `Adds.description` FROM `Users`, `Adds` WHERE `Users.uid`=`Adds.uid` AND (SELECT `Adds.uid` ORDER BY `id` DESC)');

	?>
	<table>
		<tr>
			<th>Пользователь</th>
			<th>Объявление</th>
			<th>На что готов(-а) поменяться</th>
			<th>Телефон</th>
			<th>E-mail</th>
			<th>Адрес</th>
		</tr>
		<?php
        while ($row = $stmt->fetch()) {
                while ($row['Adds.active']) {
                	?>
                	<tr>
                		<th><?php echo $row['Users.Name']; ?></th>
                		<th><?php echo $row['Adds.description']; ?></th>
                		<th><?php echo $row['Adds.exchange']; ?></th>
                		<th>
                		<?php
                		if ($row['Adds.phonenumber']) {
                			echo $row['Users.phonenumber'];
                		}
                		?>
                		</th>
                		<th>
                		<?php
                		if ($row['Adds.email']) {
                			echo $row['Users.email'];
                		}
                		?>
                		</th>
                		<th>
                		<?php
                		if ($row['Adds.adress']) {
                			echo $row['Users.adress'];
                		}
                		?>
                		</th>
                	</tr>
                	<?php
                }
        }
		?>
	</table>
</body>
</html>