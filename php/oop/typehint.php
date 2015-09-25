<?php
class Cricketer{
public function __construct(){
}
public function beat()
{

 echo "beats a lot  from cricketer";

}
}



class Basebowler{
  public function __construct(Cricketer $a){
  	$this->NewObj = $a;
  	$this->NewObj ->beat();
  }
}


new Basebowler(new Cricketer);



?>