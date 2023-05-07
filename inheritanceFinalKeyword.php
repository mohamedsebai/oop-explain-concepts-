<?php

// inheritance

// application => apple store

// class from apple store

 final class appleDevice {


  public $inech = 100;
  public $spaceSroage = 122;
  public $color;
  public $deviceName = 'iphone8';
  CONST  PROCESSOR = 'snapdragon 340';

  final public function getDeviceStandard($deviceName, $inech, $spaceSroage, $color)  {
    $this->inech = $inech;
    $this->spaceSroage = $spaceSroage ;
    $this->color = $color;
    $this->deviceName = $deviceName;

    $message = $deviceName . '<br>';
    $message .= 'screen width: ' . $inech . 'inech' . '<br>';
    $message .= 'has space ' . $spaceSroage . 'gb' . '<br>';
    $message .= 'color: ' . $color . '<br>';
    $message .= 'porcessor is : ' . self::PROCESSOR;
    return $message;
  }





}


class sonyDevice extends appleDevice{

 public $camera = '40mb';
 //  public function getDeviceStandard($deviceName, $inech, $spaceSroage, $color)  {
 //   $this->inech = $inech;
 //   $this->spaceSroage = $spaceSroage ;
 //   $this->color = $color;
 //   $this->deviceName = $deviceName;
 //
 //   $message = $deviceName . '<br>';
 //   $message .= 'screen width: ' . $inech . 'inech' . '<br>';
 //   $message .= 'has space ' . $spaceSroage . 'gb' . '<br>';
 //   $message .= 'color: ' . $color . '<br>';
 //   $message .= 'porcessor is : ' . self::PROCESSOR;
 //   return $message;
 // }

}

// iphone object
$iphone = new appleDevice;
$iphone->facebook = 'none facebook';

echo '<pre>';
print_r($iphone);
echo '</pre>';
echo $iphone->getDeviceStandard('iphone', '5.5', 128, 'black');

// sony object
$sony = new sonyDevice;
echo '<pre>';
print_r($sony);
echo '</pre>';
echo $sony->getDeviceStandard('sony', '8.5', 343, 'red');
echo '<br>';echo '<br>';echo '<br>';echo '<br>';





























//
