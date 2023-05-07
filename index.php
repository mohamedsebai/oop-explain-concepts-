<?php


// application => apple store

// class from apple store

class appleDevice {

 // properties

 //public $ram;
 public $inech = 100;
 public $spaceSroage = 122;
 public $color;
 public $deviceName = 'iphone8';

 // constant

 CONST PROCESSOR = 'snapDragon330';


 // methods
 public function pressHomeButton(){
   echo 'welcom home button';
 }

 // $this refer to object properties or method

 public function getSpecefication(){
   echo $this->inech;
 }

 public function thisMethod(){
   echo $this->pressHomeButton();
 }

 public function getDeviceName(){
   // propertiy get value from object first
   if($this->deviceName == 'iphone8'){
     echo 'this device name is: iphone8';
   }else{
     echo $this->deviceName;
   }
 }

 public function getConstProperty(){
   echo SELF::PROCESSOR;
 }

 public function getDeviceStandard($deviceName, $inech, $spaceSroage, $color){
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

// objects from class appleDevice

$iphone6plus = new appleDevice;
//$iphone6plus->deviceName = 'iphoneNote6';
$iphone6plus->getDeviceName();
echo '<br>';
$iphone6plus->ram = 12;
$iphone6plus->inech = 1444;
$iphone6plus->pressHomeButton();
echo '<br>';
$iphone6plus->getSpecefication();
echo '<br>';
echo appleDevice::PROCESSOR;
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';


$iphone7plus = new appleDevice;
$iphone7plus->thisMethod();
echo '<pre>';
var_dump($iphone7plus);
echo '</pre>';
$iphone7plus->getSpecefication();
echo '<br>';echo '<br>';echo '<br>';
// get device name
$iphone7plus->deviceName = 'iphoneNote7';
$iphone7plus->getDeviceName();
echo '<pre>';
// show constant
$iphone7plus->getConstProperty();
echo '<pre>';
echo appleDevice::PROCESSOR;
echo '<pre>';
echo $iphone7plus::PROCESSOR;
echo '<br>';echo '<br>';echo '<br>';echo '<br>';

$iphone8plus = new appleDevice;
echo $iphone8plus->getDeviceStandard('iphone8plus', '5.5', 128, 'black');








//
