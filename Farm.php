<?php
class Farm{
    public $products = [];
    public $animals = [];

    function __counstruct(){

    }
    
    function addAnimals(){
        foreach(get_declared_classes() as $class){
            if(is_subclass_of($class, 'AbstractAnimal')){
                $animalAmount = readline("Сколько добавить животных типа $class ");
                for($i = 1; $i <= $animalAmount; $i++){
                    $newCow = new $class;
                    if(!isset($this->animals[$newCow->name]))
                        $this->animals[$newCow->name] = [];
                    
                    array_push($this->animals[$newCow->name], $newCow);
                }
                
            }
        }
    
    }

    function getAnimalsInfo(){
        if(!empty($this->animals)){
            foreach($this->animals as $animalName => $animalList){
                echo "Количество $animalName - ".count($animalList)."\n";
            }
        }else
            echo "Животных ещё нет\n";
    }

    function collectProducts(){
        if(!empty($this->animals)){
            foreach($this->animals as $animalArray){
                foreach($animalArray as $animalArrayItem){
                    if(!isset($this->products[$animalArrayItem->product]))
                        $this->products[$animalArrayItem->product] = 0;

                    $this->products[$animalArrayItem->product] += $animalArrayItem->giveProduct();
                }
            }
        }
    }

    function getProductsInfo(){
        foreach($this->products as $productName => $productAmount){
            echo "Количество $productName - $productAmount \n";
        }
    }

}