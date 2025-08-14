<!-- declare a Donut class that also implements the SalesTaxable
interface and has these members:
A private string topping property with get and set methods
A private float price property with get and set methods
A public getPriceIncludingSalesTax() method implementing the
SalesTaxable interface and returning price plus 7 percent sales tax
Abstract Methods, Interfaces, and Traits -->

<?php
    class Donut implements SalesTaxable
    {

        private string $topping;
        private float $price;

        public function setTopping(string $topping): void
        {
            $this->topping = $topping;
        }
        
        public function setPrice(float $price): void
        {
            $this->price = $price;
        }

        public function getPrice(): float
        {
            return $this->price;
        }

        public function getTopping(): string
        {
            return $this->topping;
        }        

        public function getPriceIncludingSalesTax(): float
        {
            return $this->getPrice() + $this->getPrice()*0.07;
        }
    }
?>