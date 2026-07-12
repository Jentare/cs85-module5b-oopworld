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
    public function calculateDepreciatedValue() {
        //Assuming a standard depreciation rate of 15 cents per mile driven
        $mileageDepreciation = $this->mileage * 0.15;
        //current value
        $currentValue = $this->price - $mileageDepreciation;
        //If under $500
        if ($currentValue < 500) {
            $currentValue = 500;
        }
        return $currentValue;
    }

    //Change Property Value
    public function() {
        
    }

    //Decision Logic
    public function() {
        
    }

}
?>