<?php
    require_once __DIR__.'/src/Food.php';
    require_once __DIR__.'/src/Dessert.php';

    $food1 = new Food('apple');
    print($food1);
    print '<br>';

    $f2 = new Dessert('strawberry cheesecake', 99);
    print $f2;

?>