<!-- create a Pet object
referenced by a variable named $pet1. Use the setter to set its name to
'Fifi', and add a statement to print the name stored in this object.  -->

<?php
    require_once __DIR__.'/Pet.php';

    $pet1 = new Pet('Mr. Fluffy');

    
    
    print $pet1->getName();
    
?>