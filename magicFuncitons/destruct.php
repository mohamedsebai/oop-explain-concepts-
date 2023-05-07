<?php


class phone {

  public $name;
  public $ram;
  public $color;



  // can be inherted
  public function __destruct(){
    echo ' __destruct destroy file when end use it ';
  }

  public function after_destruct(){
    echo '<br> after_destruct <br>';
  }


}

class sony extends phone{

}

$phone = new phone();
$phone->after_destruct();
