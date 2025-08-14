<?php
require_once "Dessert.php";

// Create a Dessert object
$dessert = new Dessert("Chocolate Cake", DietType::VEGETARIAN);

// Print its details (will call __toString())
echo $dessert;
?>
