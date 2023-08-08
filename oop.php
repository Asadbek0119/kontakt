<?php
class Car {
    public $model;
    public $color;
    public function __construct($turi,$rangi) {
        $this->model = $turi;
        $this->color = $rangi;
    }
    public function drive () {
        echo "Mashina yo'lga chiqdi";
    }
    public function break () {
        echo "Mashina benzini tugadi";
    }
}

$car1 = new Car("malibu","qora");
// $car1->model = "shugili";
// $car1->color = "oq";
echo "<pre>";print_r($car1);echo "</pre>";
// $car1 -> drive();
?>
