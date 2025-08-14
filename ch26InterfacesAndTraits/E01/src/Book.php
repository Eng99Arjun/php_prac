<!-- 1. Declare a Book class that has the following members:
A private string title property with get and set methods
A private float price property with get and set methods
A public getPriceIncludingSalesTax() method that returns a float, cal-
culated as price plus 5 percent sales tax-->

<?php
    class Book
    {
        private string $title;
        private float $price;
        
        public function setTitle(string $title): void
        {
            $this->title = $title;
        }
        
        public function setPrice(float $price): void
        {
            $this->price = $price;
        }

        public function getPrice(): float
        {
            return $this->price;
        }

        public function getTitle(): string
        {
            return $this->title;
        }

        public function getPriceIncludingSalesTax():float
        {
            return $this->getPrice() + $this->getPrice()*0.05;
        }
        



    }
?>