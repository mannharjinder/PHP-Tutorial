<?php
$width = $_POST["width"];
$height = $_POST["height"];

//$area = $width*$height;
//dot means merge two strings, or a string and a value
//echo "Area:".$area;

//function calArea($w,$h){
  //  return $w*$h;
//}

//echo "Area: ".calArea($width, $height);

//area=calArea($width, $height)
//echo $area;


//use of class rectangle in the below part
include_once  "Rectangle.php";
$rec=new Rectangle($width,$height);
echo "Width:".$rec->width;
echo "<br> height:".$rec->height;
echo "<br> Area: ".$rec->calArea();
?>
