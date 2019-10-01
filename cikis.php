<?php
	session_start();
	session_destroy();
	echo 'CIKIS ISLEMI BASARILI - YONLENDIRILIYORSUNUZ';
	echo '<meta http-equiv="refresh" content="2;URL=admingiris.php">';
?>
