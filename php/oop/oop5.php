<?php
class Player
{

public $name;
private $role;

public function __construct($name, $role){

$this->name = $name;
$this->role = $role;
}

public function doing()
{
     return $this->role;
}

public function bowler()
{

	return true;
}
public function works(){

	return $this->name;
}




}


$player1 = new Player('sachin', 'batsman');

echo $player1->works();

class Kalikkaran extends Player{


	public function something(){
		return $this->role;
	}

}

$player2 = new  Kalikkaran('Dravid', 'keeper');
echo "</br>";
echo $player2->something();










?>