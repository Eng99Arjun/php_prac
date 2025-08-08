<?php
    require_once __DIR__.'/vendor/autoload.php';

    use DhananjayDev\Food;
    use DhananjayDev\Dessert;
try
{    
    $f1 = new Food('apple');
    print $f1 .PHP_EOL;

    $f2 = new Dessert('strawberry cheesecake', -1);
    print $f2;
} catch (\Exception $e){
    print'<br>'.'(caught!) - an exception occured!'. PHP_EOL;
    print $e->getMessage();
} finally {
    print PHP_EOL . '(finally) -- Application finished--';
}

?>