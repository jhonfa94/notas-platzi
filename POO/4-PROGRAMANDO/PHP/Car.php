<?php
class Car
{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function getDataCar(){
       echo "Licence " . $this->license . " Driver Name: " . $this->driver->name;
    }

}
