<?php

namespace vehicle\truck;
/**
 * class to represent vehicle implements vehicleInterface
 */
class myTruck extends \vehicle\myVehicle implements \vehicleInterface
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