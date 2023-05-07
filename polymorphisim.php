<?php

interface mobile {

  public function pressHome();
  public function sayName($name);

}


class iphone implements mobile{

 public $name;

 public function pressHome(){
   return 'welcome : iphone';
 }
 public function sayName($name){
   echo $name;
 }

}

class sony implements mobile{

 public $name;

 public function pressHome(){
   return 'welcome : sony';
 }

 public function sayName($name){
   echo $name;
 }

}



$iphone = new iphone;
echo $iphone->pressHome();
echo '<br>';echo '<br>';
echo $iphone->sayName('mohamed');
echo '<pre>';
print_r($iphone);
echo '</pre>';


$sony = new sony;
echo $sony->pressHome();
echo '<br>';echo '<br>';echo '<br>';
echo $iphone->sayName('hassan');
echo '<pre>';
print_r($sony);
echo '</pre>';
