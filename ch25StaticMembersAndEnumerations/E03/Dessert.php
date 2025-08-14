<!-- Create a Dessert class that has
    a name property (a string) and a diet property (a DietType enum case),
    as well as a __toString() method that summarizes the Dessert object in
    the form '(DESSERT) Dessert Name (DietType dish)'. -->
<?php
    enum DietType
    {
        case VEGAN;
        case VEGETARIAN;
        case CARNIVORE;
    }

    class Dessert 
    {
        private string $name;
        private DietType $diet;

        public function __construct(string $name, DietType $diet)
        {
            $this->name = $name;
            $this->diet = $diet;
        }

        public function __toString(): string
        {
            return "(DESSERT) $this->name ( {$this->diet->name} dish)";
        }
    }


?>

