<?php

/**
 * class to represent civic implements vehicleInterface
 */
class myCivic extends myCar implements vehicleInterface
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