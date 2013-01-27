<?php

namespace vehicle;
/**
 * Abstract class to represent vehicle
 */
abstract class Vehicle
{
    /**
     * Number of doors
     * @var int
     */
    protected $_numberOfDoors;
	/**
     * The Year
     * @var string
     */
    protected $_year;
    /**
     * Return the number of doors
     * @return int
     */
    abstract public function getNumberOfDoors();

}

class myVehicle extends Vehicle
{
    /**
     * Number of doors
     * @var int
     */
    public function getNumberOfDoors($doors = 2) {
		return $this->_numberOfDoors = $doors;
    }
    /**
     * Set the year of all vehicles
     * @var int
     */
    public function setYear($year = 2012) {
		return $this->_year = $year;
    }
    /**
     * Return the year of all vehicles
     * @var int
     */
    public function getYear() {
		return $this->_year;
    }
}

?>