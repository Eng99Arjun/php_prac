<!-- 
Refactor your project for Exercise 1 to declare an interface named
SalesTaxable requiring classes to implement a getPriceIncludingSalesTax()
method that returns a float. The Book class should implement the
SalesTaxable interface.
Next, declare a Donut class that also implements the SalesTaxable
interface and has these members:
A private string topping property with get and set methods
A private float price property with get and set methods
A public getPriceIncludingSalesTax() method implementing the
SalesTaxable interface and returning price plus 7 percent sales tax
Finally, write a main script that creates the following two objects
and prints their price with and without sales tax:
Book "Life of Pi"
price (excl. tax) = $20.00
price (incl. tax) = $21.00
Donut "strawberry icing"
price (excl. tax) = $10.00
price (incl. tax) = $10.70 -->

<?php

    require_once __DIR__.'/src/SalesTaxable.php';;
    require_once __DIR__.'/src/Book.php';;
    require_once __DIR__.'/src/Donut.php';;

    $book1 = new Book();
    $book1->setTitle("Life of Pie");
    $book1->setPrice(20.0);

    echo $book1->getTitle()."<br>";

    echo $book1->getPrice()."<br>";

    echo $book1->getPriceIncludingSalesTax()."<br>";

    $donut1 = new Donut();

    $donut1->setTopping("Strawberry Icing");
    $donut1->setPrice(10.0);

    echo $donut1->getTopping()."<br>";

    echo $donut1->getPrice()."<br>";

    echo $donut1->getPriceIncludingSalesTax()."<br>";

?>


