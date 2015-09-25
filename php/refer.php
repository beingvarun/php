<?php
class Hello{
public function greet(){
return "Good morning guys";
}


}

class World extends Hello{

public function greet()
{
	return "good evening guys";
}

}


$hello = &new Hello();
echo $hello->greet();
echo "</br>"; 
$world = &new World();
echo $world->greet();





?>