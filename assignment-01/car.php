<?php

/**
 * class to represent car implements vehicleInterface
 */
class myCar extends myVehicle implements vehicleInterface
{
	/**
     * Return the honk
     * @var string
     */
	public function honk() {
		return '';
    }
}
?>