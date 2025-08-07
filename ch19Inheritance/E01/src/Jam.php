<?php
    class Jam{

        private string $productName;
        private float $weight;
        public int $shelfLifeMonths;
        public int $sweetness;

        public function __construct(string $productName, float $weight)
        {
            $this->productName = $productName;
            $this->weight = $weight;
        }

        public function setShelfLifeMonths(int $shelfLifeMonths): void {
            $this->shelfLifeMonths = $shelfLifeMonths;
        }

        public function setSweetness(int $sweetness): void {
            $this->sweetness = $sweetness;
        }
        
        public function __toString():string
        {
            return 'JAM: '.$this->productName
            ." (".$this->weight
            ."g) keeps for "
            .$this->shelfLifeMonths
            ." months: sweetness "
            .$this->sweetness;
        }


    }
?>