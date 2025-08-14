<?php
    // Car class represents a car with make, model, and price. Tracks total price and number of instances.
    class Car
    {
        // Car make (e.g., Toyota)
        private string $make;
        // Car model (e.g., Corolla)
        private string $model;
        // Car price
        private float $price;

        // Static property to keep track of total price of all cars
        private static float $totalPrice=0;
        // Static property to keep track of number of Car instances
        private static int $numInstances=0;

        // Constructor initializes car properties and updates static counters
        public function __construct(string $make, string $model, float $price)
        {
            $this->setMake($make); // Set car make
            $this->setModel($model); // Set car model
            $this->setPrice($price); // Set car price
            self::$numInstances+=1; // Increment instance count
            self::$totalPrice+=$price; // Add to total price

        }

        // Returns the average price of all Car instances
        public function averagePrice(): float
        {
            return self::$totalPrice/self::$numInstances;
        }

        // --- Getters ---
        // Get the make of the car
        public function getMake(): string
        {
            return $this->make;
        }

        // Get the model of the car
        public function getModel(): string
        {
            return $this->model;
        }

        // Get the price of the car
        public function getPrice(): float
        {
            return $this->price;
        }

        // --- Setters ---

        // Set the make of the car
        public function setMake(string $make): void
        {
            $this->make=$make;
        }

        // Set the model of the car
        public function setModel(string $model): void
        {
            $this->model=$model;
        }

        // Set the price of the car
        public function setPrice(float $price): void
        {
            $this->price=$price;
        }

    }   
?>
