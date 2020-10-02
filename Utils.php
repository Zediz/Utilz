<?php

namespace zediz\Utilz;

class Utilz{

	$prueba = 'Mensaje de prueba';

	public function imprimirPrueba(){
		error_log($this->prueba);
	}
}

?>
