<?php
    namespace ExceptionExercise;

    class Product{
        private string $name;
        private float $price;

        public function __construct  (string $name, float $price)
        {
            $this->setName($name);
            $this->setPrice($price);
        }

        public function setName($name): void{
            $this->name = $name;
        }
        public function setPrice($price): void{
            if($price<0) throw new \InvalidArgumentException('Invalid price ');
            if($price > 1000000) throw new \Exception('too much for the Product');


            $this->price = $price;
        }

        public function getName($name): string{
            return $this->name;
        }
        public function getPrice($price): string{
            return $this->price;
        }
    }
?>