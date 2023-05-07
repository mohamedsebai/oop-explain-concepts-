<?php


class phone {

  public $name;
  public $ram;
  public $color;



  // can be inherted
  public function __call($method, $params ){
    echo "{$method} not found or accessaple<br>";
    foreach($params as $param){
      echo "{{$param}}" ;
    }
  }

  private function after_call (){
    echo '<br> you can echo that private message <br>';
  }

  private function with_param_func($name, $ram, $color){
    echo "{$name} , {$ram} , {$color}";
  }

  public function after_all (){
    echo '<br> after_all method you can echo that <br>';
  }




}

class sony extends phone{

}

$phone = new phone();
$phone->say_call(); // there is no method like this
$phone->with_param_func_not_found('Iphone7plusmax', '12GB', 'Red'); // there is no method like this with params
$phone->after_call(); // private method
$phone->with_param_func('Iphone7plusmax', '12GB', 'Red'); // private method with param
$phone->after_all();
