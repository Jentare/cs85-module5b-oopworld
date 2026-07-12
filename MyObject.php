//Jennifer Frei - 1405501
//CS85 Section 1234
//Module 5

<?php
class CarFinder {
    public $year;
    public $make;
    public $model;
    public $mileage;
    public $price;
    
    // 
    public function __construct($year, $make, $model, $mileage, $price) {
        $this->year = $year;
        $this->make = $make;
        $this->model = $model;
        $this->mileage = $mileage;
        $this->price = $price;
    }

}
?>