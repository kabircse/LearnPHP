<?php
//There area() implement the function overriding
class Square{
	public $height,$width;
	function height($height){
		return $this->height = $height;
	}
	function width($width){
		return $this->width = $width;
	}
	function area(){
		return 'Square Area: '.$this->height*$this->width;
	}
}
class Rectangle extends Square{
	function area(){
		return 'Rectangle Area: '.$this->height*$this->width;
	}
}

$rectangle = new Rectangle();
$rectangle->height(10);
$rectangle->width(15);
echo $rectangle->area();