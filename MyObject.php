//Jennifer Frei - 1405501
//CS85 Section 1234
//Module 5 - Vehicle Search

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
    public function negotiatePrice($offeredPrice) {
        $this->price = $offeredPrice;
        return "New negotiated price set to: $ " . number_format($this->price);
    }

    //Decision Logic
    public function isTargetVehicle() {
        if(strtoupper($this->model) === "RX350" || strtoupper($this->model) === "RAV4" || strtoupper($this->model) === "HIGHLANDER" || strtoupper($this->model) === "CR-V") {
            return true;
        }
        return false;
    }

    /* AI Method - Average Miles Per Year
    Calculaes the historical annual mileage of the vehicle
    to establish a usage bseline for future wear predicitons.
    */
    public function getAverageMilesPerYear() {
        $currentYear = 2026;
        $age = $currentYear - $this->year;

        if ($age <= 0) {
            $age = 1;
        }
        return $this->mileage / $age;
    }
}
?>