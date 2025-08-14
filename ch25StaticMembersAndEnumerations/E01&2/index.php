<?php
require_once __DIR__.'/src/Car.php'; // class code is saved as Car.php

// Create Car objects
$car1 = new Car("Toyota", "Camry", 25000);
$car2 = new Car("Honda", "Civic", 22000);
$car3 = new Car("BMW", "X5", 60000);

// Display details for each car
echo "Car 1: {$car1->getMake()} {$car1->getModel()} - $ {$car1->getPrice()}<br>";
echo "Car 2: {$car2->getMake()} {$car2->getModel()} - $ {$car2->getPrice()}<br>";
echo "Car 3: {$car3->getMake()} {$car3->getModel()} - $ {$car3->getPrice()}<br>";

// Show the average price
echo "<br><strong>Average Price of Cars:</strong> $ " . $car1->averagePrice();
?>

