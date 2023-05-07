<?php


abstract  class makeDivice{
  public $ram;
  public $inech;
  public $color;

  abstract public function getDeviceName();
  public function getDeviceStandard(){

  }

}

class iphone extends makeDivice{

   public function getDeviceName(){
    echo 'say abstract';
   }
}

$iphone = new iphone;
$iphone->getDeviceName();

echo '<pre>';
print_r($iphone);
echo '</pre>';
