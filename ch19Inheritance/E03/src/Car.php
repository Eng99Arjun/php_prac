<!-- A Car class that extends Vehicle, adding seat count and road tax properties with 
 a custom string representation. -->

<?php
    class Car extends Vehicle{
        private int $numSeats;
        private float $roadTax;

        public function __construct(int $numDoors, string $fuel, int $numSeats, float $roadTax){
            parent:: __construct($numDoors, $fuel);
            $this->numSeats= $numSeats;
            $this->roadTax =$roadTax;
        }

        public function __toString(): string 
        {
            return "(Car) with $this->numDoors Doors, {$this->fuel}L fuel , $this->numSeats Seats and $this->roadTax RoadTax";
        }
    }
?>