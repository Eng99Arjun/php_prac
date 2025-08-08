<?php
namespace DhananjayDev;

// Defines a class for desserts, extending food with a calories property and custom output for exception prac

    class Food
    {
        protected string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function __toString(): string
        {
            return "(Food) $this->name";
        }
    }
?>