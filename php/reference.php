<?php
 class LookAndFeel{
 var $color;
 var $size;

function LookAndFeel(){

   $this->color ='white';
   $this->size = 'medium';
}

function getColor(){

 return $this->color;

}
function getSize(){

 return $this->size;
}

function setColor($color){
 $this->color = $color;

}

function setSize($size){
$this->size = $size;
}
}


class Output {
var $lookandfeel;
var $output;
// Constructor takes LookAndFeel as its argument
function Output($lookandfeel)
{
$this->lookandfeel = $lookandfeel;
}
function buildOutput()
{
$this->output = 'Color is ' . $this->lookandfeel->getColor() .
' and size is ' . $this->lookandfeel->getSize();
}
function display()
{
$this->buildOutput();
return $this->output;
}
}


$lookandfeel = new LookAndFeel();
$output = new Output($lookandfeel);
echo $output->display();


?>