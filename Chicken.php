<?php
require_once "AbstractAnimal.php";

class Chicken extends AbstractAnimal{
    public $name = "Курица";
    public $product = "Яйца";

    public function giveProduct(){
        return rand(0, 1);
    }
}