<?php

class iphone{


 public static $name;

  public static  function pressHome(){
   return 'welcome : iphone';
 }

 public static function sayName($name){
   echo $name;
 }


}

$iphone = new iphone;
echo iphone::pressHome();
echo '<br>';echo '<br>';
echo iphone::sayName('name is mohamed');
echo '<br>';echo '<br>';
echo $iphone->sayName('name is mohamed');
echo '<pre>';
print_r($iphone);
echo '</pre>';
