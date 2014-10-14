<?php
	session_start();

	$_SESSION['user'] = $_GET['u'];

	echo '<meta http-equiv="refresh" content="0; url=./">';
?>