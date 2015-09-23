<?php
class Courier{
public $name;
public $home_country;


public static function getCouriersByCountry($country){
  return $country;
}





	
}











$varun = Courier::getCouriersByCountry('australia');
echo $varun;












?>