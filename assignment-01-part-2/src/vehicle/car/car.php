<?php

namespace vehicle\car;
/**
 * class to represent car implements vehicleInterface
 */
class myCar extends \vehicle\myVehicle implements \vehicleInterface
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