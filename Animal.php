<?php


class Animal
{
    private $eyes=2;
    private $nose=1;
    private $arms=2;
    private $legs=2;
    private $ears=2;
    public $age;

    //constructor
    function Animal($age){
        $this->age=$age;
    }

    //methods
    function look(){
        echo "I am looking";
    }

    function makeSound(){
        echo "......";
    }

}
?>