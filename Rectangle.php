<?php


class Rectangle
{
    //properties
public $width;
public $height;

//constructor
function Rectangle($width, $height){
    $this->width=$width;
    $this->height=$height;
}

//methods
public function calArea(){
    return $this->height*$this->width;
}
}

?>