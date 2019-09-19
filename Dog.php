<?php

include_once "Animal.php";
class  Dog extends Animal
{
    private $tail=1;

    function makeSound()
    {
        echo "Bark";
    }

    public function showTail(){
        return $this->tail;
    }

}

?>