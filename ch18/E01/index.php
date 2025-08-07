<?php
    require_once __DIR__.'/Cat.php';

    $cat1 = new Cat();

    $cat1->name = 'Mr. Fluffy';
    $cat1->breed = 'long-haired mix';
    $cat1->age = 2;

    print 'Cat name = '. $cat1->name. ', Cat breed = '. $cat1->breed . ", Cat age = ". $cat1->age ;