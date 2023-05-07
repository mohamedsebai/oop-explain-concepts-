<?php


class appleDevice {


 public $inech = 100;
 public $spaceSroage = 122;

 public function pressPower(){
   echo 'welcom power <br>';
   return $this;
 }
 public function pressHomeButton(){
   echo 'welcom home button <br>';
   return $this;
 }
 public function pressCold(){
   echo 'welcom pressCold <br>';
   return $this;
 }

}


$iphone = new appleDevice;
$iphone->pressPower();
$iphone->pressHomeButton();
$iphone->pressCold();
echo '<br>';
$iphone->pressPower()->pressHomeButton()->pressCold();
echo '<pre>';
var_dump($iphone);
echo '</pre>';
