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
    
    //Constructor
    public function __construct($year, $make, $model, $mileage, $price) {
        $this->year = $year;
        $this->make = $make;
        $this->model = $model;
        $this->mileage = $mileage;
        $this->price = $price;
    }

    //Summary Display
    public function getListingSummary() {
        return "Listing: " . $this->year . " " . $this->make . " " . $this->model . " with " . number_format($this->mileage) . " miles. Price: $" . number_format($this->price);
    }

    //Calculate Value
    public function() {
        
    }

    //Change Property Value
    public function() {
        
    }

    //Decision Logic
    public function() {
        
    }

}
?>