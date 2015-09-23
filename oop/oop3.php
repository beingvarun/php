<?php
class Player
{
public $name;
public $role;

//introducing constructor function 


public function  __construct($name, $role){
	$this->name = $name;
	$this->role = $role;
}
public function doing(){

 return $this->name . "  is  ". $this->role. "  in the team";

}



}
?><?php

$player1 = new Player('Ganguly', 'Alrounder');
echo $player1->doing();
?>