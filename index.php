<?php 

require 'exercise_1_classes.php';


$beer = new Beverages("Buche", "Yellow", 3, 4.5);
$coke = new Beverages("Coke", "Black", 2, 0);
$duvel = new Duvel("Duvel", "Light", 6, 8.5);

echo $beer->getInfo() . "\n"; // Added echo statement to display the returned info
echo $coke->getInfo() . "\n"; // Added echo statement to display the returned info
echo $duvel->getInfo() . "\n"; // Added echo statement to display the returned info

?>