<?php


class phone {

  public $name;
  public $ram;
  public $color;

  public function before_construct(){
    echo '<br> before_construct <br>';
  }

  // can be inherted
  public function __construct($name, $ram, $color){
    $this->name = $name;
    $this->ram = $ram;
    $this->color = $color;

    $msg = "device name is : {$name} <br>";
    $msg .= "device ram is : {$ram} <br>";
    $msg .= "device color is : {$color} ";
    echo  $msg;
  }


}

class sony extends phone{

}

$phone = new phone('Iphone', '12GB', 'Red');
$phone->before_construct();
$sony = new sony('Sony', '12GB', 'Red');
