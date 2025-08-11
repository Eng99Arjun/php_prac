<?php
    require_once __DIR__. '/vendor/autoload.php';

    use DhananjayDev\Suit;
    use DhananjayDev\Cards;

    $card1 = new Cards();
    $card1->setSuit(Suit:: SPADES);
    $card1->setNumber(1);

    print $card1;

    print("<br> All cases of SUIT <br>");
    $cases = Suit::cases();
    $caseStrings = [];
    foreach($cases as $case){
        $caseStrings[] = $case->value;
    }
    print implode($caseStrings);

?>