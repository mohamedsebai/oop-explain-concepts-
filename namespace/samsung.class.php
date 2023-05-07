<?php


namespace MakeDevice\samsung;

class CreateApplePhone{

  public $name;

  public function getDeviceName($name){
    $this->name = $name;
    return $name;
  }

}
