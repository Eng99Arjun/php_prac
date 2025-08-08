<!-- Examine the Car and Van classes in Figure 19-8 and plan out an abstract
superclass to hold the common members of both classes.
--------------------------
Car
numDoors: Integer
fuel: String
numSeats: Integer
roadTax: Float
--------------------------
Van
numDoors: Integer
fuel: String
commercialTax: Boolean
--------------------------
Figure 19-8: The Car and Van classes
Declare your superclass, as well as the Car and Van classes. Then
write an index script that creates one Car and one Van object and uses
print statements to invoke their __toString() methods. -->


<?php
    require_once __DIR__.'/src/Vehicle.php';
    require_once __DIR__.'/src/Car.php';
    require_once __DIR__.'/src/Van.php';

    $car1 = new Car(4, 25.0, 5, 5.5);

    print $car1;

    print'<br>';

    $van1 = new Van(5, 50, true);

    print $van1;
?>