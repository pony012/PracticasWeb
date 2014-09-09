<?php
	/**
	* Controlador de Vehículo
	*/
	class VehicleCtrl{
		private $model;

		/**
		 * Ejecuta acciones basado en la accion seleccionada por los agrumentos
		 */
		public function run()
		{
			switch ($_GET['act']) {
				case 'create':
					//El usuario es válido y tiene permisos?

					//Crear el vehículo
					$this->create();
					break;
				
				default:
					# code...
					break;
			}
		}

		private function create(){
			//Variables variables
			$vin 	= $this->validateNumber($_POST['vin']);
			$brand 	= $this->validateText($_POST['brand']);
			$type 	= $this->validateText($_POST['type']);
			$model 	= $this->validateNumber($_POST['model']);

			$result = $this->model->create($vin, $brand, $type, $model);

			//Si pudo ser creado
			if ($result) {
				//Cargar la vista
				require_once 'views/vehicleInserted.php';
			}else{
				require_once 'views/vehicleInsertedError.html';
			}
		}

		/**
		 *	@param string $data
		 *	@return string $data
		 *	Valida que una cadena sea un número y limpia la variable en caso de ser necesario
		 */
		private function validateNumber($data){
			//TODO
			//Limpiar variable
			return $data;
		}

		/**
		 *	@param string $data
		 *	@return string $data
		 *	Valida que una cadena esté limpia
		 */
		private function validateText($data){
			//TODO
			//Limpiar variable
			return $data;
		}

		function __construct(){
			require_once 'models/vehicleModel.php';
			$this->model = new VehicleMdl();
		}
	}
?>