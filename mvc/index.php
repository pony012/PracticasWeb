<?php
	//Petición de controlador
	switch ($_GET['ctrl']) {
		case 'vehicle':
			//Cargar la clase de mi controlador
			require_once 'controllers/vehicleCtrl.php';
			//Crear el controlador
			$ctrl = new VehicleCtrl();
			break;

		case 'user':
			//Cargar la clase de mi controlador
			require_once 'controllers/userCtrl.php';
			//Crear el controlador
			$ctrl = new UserCtrl();
			break;
		
		default:
			$ctrl = false;
			require_once 'views/Form.html';
			break;
	}
	if($ctrl)
		$ctrl->run();
	
?>