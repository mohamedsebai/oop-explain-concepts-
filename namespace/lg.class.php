<?php

namespace lg;

class CreateApplePhone{

  public $name;

  public function getDeviceName($name){
    $this->name = $name;
    return $name;
  }

}
