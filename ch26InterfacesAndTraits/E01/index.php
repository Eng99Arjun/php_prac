<!--  Write a main script that creates a Book object and prints its price with
and without sales tax, like so:
Book "Life of Pi"
price (excl. tax) = $20.00
price (incl. tax) = $21.00  -->

<?php

require_once __DIR__.'/src/Book.php';;

$book1 = new Book();
$book1->setTitle("Life of Pie");
$book1->setPrice(20.0);

echo $book1->getTitle();

echo $book1->getPrice();

echo $book1->getPriceIncludingSalesTax();





?>