<?php 

session_start();

include 'Conn.php';

function deactivation() { 
	global $pdo;
	if ($_POST['active']){
	    $scndstmt = $pdo->query('UPDATE `Adds` SET `active`="0" WHERE `id`="'.$_SESSION["id"].'"');
	}
}

function link_bar($page, $pages_count) {
	$site = '/index.php';
    for ($j = 1; $j <= $pages_count; $j++)
    {
        if ($j == $page) {
            echo ' <a><b>'.$j.'</b></a> ';
        } else {
            echo ' <a href='.$site.'?page='.$j.'>'.$j.'</a> ';
        }

        if ($j != $pages_count) {
        	echo ' ';
        }
    }
    return true;
} 
?>