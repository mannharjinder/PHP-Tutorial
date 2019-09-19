<?php
include_once "Animal.php";
include_once "Cat.php";
include_once "Dog.php";

$animal =new Animal(6);
$cat = new Cat(3);
$Dog=new Dog(1);

echo "Animal Look: ";
$animal->look();
echo "<br>Animal Sound: ";
$animal->makeSound();

echo "<br>Cat Look: ";
$cat->look();
echo "<br>Cat Sound: ";
$cat->makeSound();

echo "<br>Dog Look: ";
$Dog->look();
echo "<br>Dog Sound: ";
$Dog->makeSound();

echo "<br>Dog Tail: ".$Dog->showTail();


?>
