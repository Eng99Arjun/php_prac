<!-- 2. Write a PHP class declaration for a Pet class, with a private name property
and public get and set accessor methods for this name variable. Then write
an index.php file to read in the class declaration -->

<?php
class Pet
    {
        
        private string $name;
        private int $age;
        private int $houseNumber;
        private string $color;
        private float $length;
        private bool $heavy;


        
// 3.Add a constructor method to your Pet class so you can create new Pet
// objects with an initial value of the name variable by using a statement
// like this:
// $pet1 = new Pet('Mr. Fluffy');

        public function __construct( string $name)
        {
            $this->setName($name);   
        }


        public function getName(): string
        {
            return $this->name;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }

/* 4. For the following properties and types, write their corresponding accessor (getter/setter) method names:
age // integer
houseNumber // integer
color // string
length // float
heavy // bool

*/
        #getters
        public function getAge(): int {
            return $this->age;
        }
        
        public function getHouseNumber(): int 
        {
            return $this->houseNumber;
        }
        
        public function getcolor(): string 
        {
            return $this->color;
        }
        

        public function getLength(): float 
        {
            return $this->length;
        }
        
        public function isHeavy(): bool 
        {
            return $this->heavy;
        }

        #setters
        public function setAge(int $age): void
        {
            $this->age = $age;
        } 

        public function setHouseNumber( int $houseNumber) : void
        {
            $this->houseNumber = $houseNumber;
        }

        public function setcolor(string $color): void
        {
            $this->color = $color;
        }

        public function setLength(float $length): void
        {
            $this->length = $length;
        }

        public function setHeavy(bool $heavy): void
        {
            $this->heavy = $heavy;
        }


    }
?>
