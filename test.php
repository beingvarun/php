<?php
//class LookAndFeel

class LookAndFeel{

var $color; 
var $size;

//constructor function 

function LookAndFeel($color, $size ){

$this->color = $color;
$this->size = $size;


}
//function getcolor

function getColor(){
	return $this->color;
}

//function getsize
function getSize(){

	return $this->size;
}


}

//class LookAndFeel ends here

//class output

class Output{
	var $lookandfeel;
	var $output;


	function Output($lookandfeel){

     $this->lookandfeel = $lookandfeel;

	}
	function buildoutput(){
       $this->output = "color is ".$this->lookandfeel->getColor().'  and size is '. $this->lookandfeel->getSize();

    }
	function display(){
		$this->buildoutput();
		return $this->output;
	}
}

$feel = new LookandFeel('green', 'large');
$output = new output($feel);
echo $output->display();










?>