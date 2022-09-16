<?php
abstract class AbstractAnimal{
    public $animalId;
    public $name;
    public $product;

    public function __construct(){
        $this->animalId = uniqid();
    }
    abstract function giveProduct();
}