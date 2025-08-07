<?php
    require_once __DIR__.'/src/Spread.php';
    require_once __DIR__.'/src/Jam.php';
    require_once __DIR__.'/src/Honey.php';

    $food1 = new Jam("Raspbery Conserve", 45.5);
    $food1->setShelfLifeMonths(24);
    $food1->setSweetness(5);
    
    print $food1.'<br>';

    $food2 = new Honey("Clear Honey", 90.0);
    $food2->setIsManuka(true);
    $food2->setShelfLifeMonths(60);

    print $food2;
?>