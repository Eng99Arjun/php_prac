<!-- Write a TaxFunctions utility class that declares a public static addTaxToPrice()
method that takes in a float price and float tax rate and returns the value
of the price with the tax added. Refactor the implementations of the
g­ etPriceIncludingSalesTax() methods in the Book and Donut classes to use this
utility class method, to avoid code duplication. -->

<?php

    class TaxFunctions
    {
        public static function addTaxToPrice(float $price, float $taxRate): float
        {
            return $price + $price*($taxRate/100);
        } 
    }
?>