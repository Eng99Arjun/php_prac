<!--An abstract Vehicle class with door and fuel properties, a constructor, 
 and an abstract string representation method. -->

<?php 
    abstract class Vehicle{
        protected int $numDoors;
        protected float $fuel;

        public function __construct(int $numDoors, string $fuel){
            $this->numDoors = $numDoors;
            $this->fuel = $fuel;
        }

        abstract public function __toString(): string;
    }
?>