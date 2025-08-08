<!-- a Van class that extends Vehicle, adding a commercial 
 tax property and a custom string representation. -->

<?php
    class Van extends Vehicle{
        private bool $commercialTax;

        public function __construct(int $numDoors, string $fuel, bool $commercialTax){
            parent:: __construct($numDoors, $fuel);
            $this->commercialTax =$commercialTax;
        }

        public function __toString(): string 
        {
            return "(Van) with $this->numDoors Doors, {$this->fuel}L fuel and $this->commercialTax RoadTax";
        }
    }
?>