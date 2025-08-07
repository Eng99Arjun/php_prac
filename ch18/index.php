<?php
    require_once __DIR__ .'/Product.php';

    $product1 = new Product('hammer', 9.99);
    $product1->setTaxRate(2.5);

    print $product1;

    // $product1->setName('hammer');

    // print 'product1 name = ' . $product1->getName();

    // $product1->setPrice(9.99);

    // print " , and price = {$product1->getPrice()}";

?>