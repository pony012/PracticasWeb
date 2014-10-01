<?php
	/**
	* 
	*/
	class VehicleMdl
	{
		private $vin;
		private $brand;
		private $type;
		private $model;


		/**
		 * private $vin;
		 * private $brand;
		 * private $type;
		 * private $model;
		 */
		public function create($vin, $brand, $type, $model){
			$this->vin		= $vin;
			$this->brand	= $brand;
			$this->type		= $type;
			$this->model	= $model;

			return true;
		}
		function __construct()
		{
			# code...
		}
	}
?>