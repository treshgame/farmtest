<?php
require_once "Farm.php";
require_once "Cow.php";
require_once "Chicken.php";

$farm = new Farm;

echo "Файл запущен\n";

// foreach(get_declared_classes() as $class){
//     if(is_subclass_of($class, 'AbstractAnimal')){
//         $newCow = new $class;
//         print_r($newCow);
//     }
//         // echo "$class\n";
// }

$farm->addAnimals();
$farm->getAnimalsInfo();
for($i = 1; $i <= 7; $i++){
    echo "Сбор, День $i...\n";
    sleep(0.5);
    $farm->collectProducts();
}

$farm->getProductsInfo();
$farm->addAnimals();
$farm->getAnimalsInfo();
for($i = 1; $i <= 7; $i++){
    echo "Сбор, День $i...\n";
    sleep(0.5);
    $farm->collectProducts();
}
$farm->getProductsInfo();
