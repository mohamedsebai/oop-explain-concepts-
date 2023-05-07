<?php


abstract  class makeDivice{



  abstract protected function getDeviceName($name);
  abstract public function getDeviceStandard($ram, $color);
  abstract public function sayWelcome();
}

class iphone extends makeDivice{

  public $name;
  public $ram;
  public $color;


   public function getDeviceName($name){
     $this->name = $name;
     return 'device name is: ' . $name . '<br>';
   }

   public function getDeviceStandard($ram, $color){
     $this->ram = $ram;
     $this->color = $color ;

     $message = 'ram is: ' .  $ram . '<br>';
     $message .= 'color is: ' . $color . '<br>';
     return $message;
   }

   public function sayWelcome(){
     return 'welcome : ';
   }

}

$iphone = new iphone;
echo $iphone->getDeviceName('iphone');
echo $iphone->getDeviceStandard('12GB', 'Red');
echo $iphone->sayWelcome();
echo '<pre>';
print_r($iphone);
echo '</pre>';
