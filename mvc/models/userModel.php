<?php
	/**
	* Modelo del usuario
	*/
	class UserMdl{
		private $name;
		private $age;
		private $height;
		private $email;


		/**
		 * private $name;
		 * private $age;
		 * private $height;
		 * private $email;
		 */
		public function create($name, $age, $height, $email){
			$this->name		= $name;
			$this->age		= $age;
			$this->height	= $height;
			$this->email	= $email;

			return true;
		}
		function __construct()
		{
			# code...
		}
	}
?>