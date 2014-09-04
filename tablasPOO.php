<?php
	define("__MAX_TABLAS__", 10);
	define("__MAX_MULTIPLICADOR__", 12);
	$numeroTablas = (!isset($_GET['nTablas'])||$_GET['nTablas']==NULL)?__MAX_TABLAS__:$_GET['nTablas'];
	$inicioTablas = (!isset($_GET['iTablas'])||$_GET['iTablas']==NULL)?1:$_GET['iTablas'];
	$numeroMult = (!isset($_GET['nMult'])||$_GET['nMult']==NULL)?__MAX_MULTIPLICADOR__:$_GET['nMult'];

	class Tablas
	{		
		const __MAX_TABLAS__ = 10;
		const __MAX_MULTIPLICADOR__ = 12;

		private $numeroTablas;
		private $numeroMult;
		private $inicioTablas;
		
		function __construct($numeroTablas = self::__MAX_TABLAS__, $numeroMult = self::__MAX_MULTIPLICADOR__, $inicioTablas = 1)
		{
			$this->numeroTablas = is_null($numeroTablas)?__MAX_TABLAS__:$numeroTablas;
			$this->numeroMult = is_null($numeroMult)?__MAX_MULTIPLICADOR__:$numeroMult;
			$this->inicioTablas = is_null($inicioTablas)?1:$inicioTablas;
		}
		public function imprimirTablas(){
			for($i = 0; $i < $this->numeroTablas; $i++){
				for ($j=1; $j <= $this->numeroMult; $j++) { 
					echo ($i+$this->inicioTablas),'*',$j,'=',($i+$this->inicioTablas)*$j,'<br>';
				}
				echo '<br>';
			}	
		}
	}

	$tablas = new Tablas($numeroTablas, $numeroMult, $inicioTablas);
	$tablas->imprimirTablas();
?>
