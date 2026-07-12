# AI Method Generation & Critique
**Student:** Jennifer Frei  
**Course:** CS85 Section 1234  

### 1. The Exact Prompt Used
"Write a PHP class method named getAverageMilesPerYear() that subtracts the class property 'year' from the current year (2026) to find the car's age. Divide the property 'mileage' by the age to return the average miles per year. Include a safety check so you don't divide by zero if the age is 0."

### 2. Raw AI-Generated Code
```php
public function getAverageMilesPerYear() {
    $currentYear = 2026;
    $age = $currentYear -$this->year;

    if ($age <= 0) {$age = 1;
    }

    return $this->mileage / $age;
}