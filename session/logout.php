<?php
	session_start();

	session_unset();
	session_destroy();
	
	setcookie(session_name(), '', time()-3600);

	echo '<meta http-equiv="refresh" content="0; url=./">';
?>