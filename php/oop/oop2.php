<?php
class Player
{

public $name;
public $role;


public function doing(){

 echo $this->name . "  is  ". $this->role. "  in the team";


}



}




?>
<?php

$player1 = new Player;
$player1->name = "sachin";
$player1->role = "batsman";
echo $player1->doing();

?>