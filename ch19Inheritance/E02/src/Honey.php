<?php
    class Honey extends Spread{
        public bool $isManuka = false;

        public function __construct(string $productName, float $weight)
        {
            parent::__construct($productName, $weight);
        }
        
        public function setIsManuka(bool $isManuka):void{
            $this->isManuka = $isManuka;
        }

        public function checkManuka(bool $isManuka): string
        {
            return $isManuka?"Manuka":"NOT Manuka";
        }
        public function __toString()
        {
            return 'Honey: '.$this->productName.' ('.$this->weight.'g) keeps for '.$this->shelfLifeMonths." (".$this->checkManuka($this->isManuka).')';
        }
    }
?>