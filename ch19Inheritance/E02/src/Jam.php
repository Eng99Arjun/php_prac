<?php
    class Jam extends Spread{

        
        public int $sweetness;

        public function __construct(string $productName, float $weight)
        {
            parent::__construct($productName, $weight);
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