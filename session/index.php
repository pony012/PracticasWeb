<?php
	session_start();

	if(isset($_SESSION['user'])){
		echo 'Bienvenido ',$_SESSION['user'],'<br>';
		var_dump($_SESSION);
		echo '<br><a href="logout.php">Cerrar Sesion</a>';
	}else{
		echo 'Es necesario iniciar sesion en el sistema <br>';
		echo '<form action="login.php" method="GET">';
		echo '<label for="u">Nombre</label>';
		echo '<input type="text" placeholder="Ingresa un nombre" id="u" name="u">';
		echo '<input type="submit" value="Click para iniciar sesion">';
		echo '</form>';
	}
?>