<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
    }

    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this -> doors = $doors;
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this -> type = $type;
    }
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this->loadCapacity = $loadCapacity;
    }
}

// Далее создай объекты и протестируй их.
$car = new Car("Toyota", "Corolla", 2020, 4);
$bike = new Bike("Yamaha", "MT-07", 2021, "Sport");
$truck = new Truck("Volvo", "FH16", 2019, 20);
print($car -> getInfo().'<br>');
print($bike -> getInfo().'<br>');
print($truck -> getInfo().'<br>');