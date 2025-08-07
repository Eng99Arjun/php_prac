<?php
    require_once __DIR__.'/src/Jam.php';

    $food1 = new Jam("Raspbery Conserve", 45.5);
    $food1->setShelfLifeMonths(24);
    $food1->setSweetness(5);
    
    print $food1;
?>