<?php
require_once "AbstractAnimal.php";

class Cow extends AbstractAnimal{
    public $name = "Корова";
    public $product = "Молоко";

    public function giveProduct(){
        return rand(8, 12);
    }


}