<?php

/**
 * class to represent vehicle implements vehicleInterface
 */
class myTruck extends myVehicle implements vehicleInterface
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
