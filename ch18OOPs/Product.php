<?php
    class Product{
        private string $name;
        private float $price;
        private float $taxRate;

        public function __construct(string $name, float $price)
        {
            $this->setName($name);
            $this->setPrice($price);
        }

        public function __toString(): string
        {
            return '(Product) name =' .$this->name
                .', and price = ' . $this->price
                .', and price with Tax = '. $this->getPriceIncludingTax();
        }

        public function getTaxRate(): float{
            return $this->taxRate;
        }

        public function setTaxRate(float $taxRate): void
        {
            $this->taxRate = $taxRate;
        }

        public function getPriceIncludingTax(): float{
            return (1 + $this->taxRate)*$this->price;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }

        public function getPrice(): float{
            return $this->price;
        }

        public function setPrice(float $price): void
        {
            if($price >= 0) $this->price = $price;
        }
    }
?>