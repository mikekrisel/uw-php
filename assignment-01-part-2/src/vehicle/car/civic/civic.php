<?php

namespace vehicle\car\civic;
use vehicle\car as vehicle;
/**
 * class to represent civic implements vehicleInterface
 */
class myCivic extends vehicle\myCar implements \vehicleInterface
{
	/**
     * Return the honk
     * @var string
     */
	public function honk() {
		return 'honk honk';
    }
}

?>