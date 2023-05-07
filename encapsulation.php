<?php

// encapsulation
// application => apple store

// class from apple store

class appleDevice {


 public $inech = 100;
 public $spaceSroage = 122;
 public $color;
 public $deviceName = 'iphone8';
 private $lockCode;



 public function changeLockCode($lock){
   $this->lockCode = md5($lock);
   return $lock;
 }


}


$iphone = new appleDevice;
//   $iphone->lockCode = 'mohamed12yirks';
echo '<pre>';
var_dump($iphone);
echo '</pre>';

$iphone->changeLockCode('700byu456');
//$iphone->lockCode = 'mohamed12yirks';
echo '<pre>';
var_dump($iphone);
echo '</pre>';







//
