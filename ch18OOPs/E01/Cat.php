<!-- 1. Write a PHP class declaration for a Cat class, with public properties of
name, breed, and age. Then write an index.php file to read in the class declaration and create a Cat object. Store a reference to the new object in a
variable named $cat1 and set its properties as follows:
name = 'Mr. Fluffy'
breed = 'long-haired mix'
age = 2
Finally, add statements to print the data values for each property of
$cat1. -->

<?php
    class Cat
    {
        public string $name;
        public string $breed;
        public int $age;

    }
?>