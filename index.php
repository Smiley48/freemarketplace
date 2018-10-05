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
    
    if (empty(@$_GET['page']) || ($_GET['page'] <= 0)) {
        $page = 1;
    } else {
        $page = (int) $_GET['page']; 
    }

    $tocount = $pdo->prepare('SELECT * from Adds');
    $count = $tocount->rowCount();
    $pages_count = ceil($count / 10); 


    if ($page > $pages_count) {
    	if ($pages_count!=0) {
    		$page = $pages_count;
    	}
        $start_pos = ($page - 1) * 10; 
    }


	$stmt = $pdo->query('SELECT Users.`Name`, Adds.`phonenumber`, Users.`phonenumber`, Adds.`email`, Users.`email`, Users.`blocked`, Adds.`adress`, Users.`adress`, Adds.`exchange`, Adds.`active`, Adds.`description`, Adds.`id`, Adds.`uid` FROM Users, Adds WHERE Users.`uid`=Adds.`uid` ORDER BY `id` DESC LIMIT '.$start_pos.', 10');

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
        	if (!($row['blocked'])) {
                if ($row['active']) {
                	?>
                	<tr>
                		<th><?php echo htmlspecialchars_decode($row['Name'], ENT_QUOTES); ?></th>
                		<th><?php echo htmlspecialchars_decode($row['description'], ENT_QUOTES); ?></th>
                		<th><?php echo htmlspecialchars_decode($row['exchange'], ENT_QUOTES); ?></th>
                		<th>
                		<?php
                		if (htmlspecialchars_decode($row['phonenumber'], ENT_QUOTES)) {
                			echo htmlspecialchars_decode($row['phonenumber'], ENT_QUOTES);
                		}
                		?>
                		</th>
                		<th>
                		<?php
                		if (htmlspecialchars_decode($row['email'], ENT_QUOTES)) {
                			echo htmlspecialchars_decode($row['email'], ENT_QUOTES);
                		}
                		?>
                		</th>
                		<th>
                		<?php
                		if (htmlspecialchars_decode($row['adress'], ENT_QUOTES)) {
                			echo htmlspecialchars_decode($row['adress'], ENT_QUOTES);
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
	<?php
	link_bar($page, $pages_count);
	?>
</body>
</html>