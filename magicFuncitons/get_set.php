<?php

class phone {

  private $name;
  private $ram;
  private $color = 'red';



 public function __get($property){
   echo "{{'$property'} error with it} <br>";
 }

 public function __set($property, $value){
   echo "{{$property}} you can not set it or set its {{$value}}";
 }

}

class sony extends phone{

}

$phone = new phone();
$phone->name; // private
$phone->inech = '6.5'; // not found
$phone->color = 'black'; // private
echo "<pre>";
print_r($phone);
echo "</pre>";
