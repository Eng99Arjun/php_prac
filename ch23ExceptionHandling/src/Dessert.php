<?php  
namespace DhananjayDev;
// <!-- Defines a Dessert class that extends Food, adding a calories property 
//  and a custom string representation. for Exception practice -->
class Dessert extends Food
{
    private int $calories;

    public function __construct(string $name, int $calories)
    {
        parent:: __construct($name);
        $this->setCalories($calories);
    }

    public function getCalories(): int
    {
        return $this->calories;
    }

    public function setCalories(int $calories):void
    {
        if($calories < 0){
            throw new \Exception('attempting to set calories to a negative value');
        }

        $this->calories = $calories;
    }

    public function __toString(): string
    {
        return "I am a Dessert containing $this->calories!";
    }
}
?>