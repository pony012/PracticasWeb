<?php
	/**
	* Controlador de Usuario
	*/
	class UserCtrl{
		private $model;

		/**
		 * Ejecuta acciones basado en la accion seleccionada por los agrumentos
		 */
		public function run()
		{
			switch ($_GET['act']) {
				case 'create':
					//TODO
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
			//Variables
			$name 	= $this->validateText(isset($_POST['name'])?$_POST['name']:NULL);
			$age 	= $this->validateNumber(isset($_POST['age'])?$_POST['age']:NULL);
			$height	= $this->validateNumber(isset($_POST['height'])?$_POST['height']:NULL);
			$email 	= $this->validateText(isset($_POST['email'])?$_POST['email']:NULL);

			$result = $this->model->create($name, $age, $height, $email);

			//Si pudo ser creado
			if ($result) {
				//Cargar la vista
				require_once 'views/userInserted.php';
			}else{
				require_once 'views/userInsertedError.html';
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
			require_once 'models/userModel.php';
			$this->model = new UserMdl();
		}
	}
?>