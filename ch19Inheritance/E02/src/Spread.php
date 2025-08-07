<?php
    abstract class Spread{
        protected string $productName;
        protected float $weight;
        public int $shelfLifeMonths;

        
        public function __construct(string $productName, float $weight) {
            $this->productName = $productName;
            $this->weight = $weight;
        }

        public function setShelfLifeMonths(int $shelfLifeMonths):void
        {
            $this->shelfLifeMonths= $shelfLifeMonths;
        }

        public function getProductName(): string{
            return $this->productName;
        }

        public function getWeight(): float{
            return $this->weight;
        }
        
        
    }
?>