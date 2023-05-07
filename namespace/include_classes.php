<?php

require 'apple.class.php';
require 'sony.class.php';
require 'lg.class.php';
require 'samsung.class.php';

//  namespace
$phone = new apple\CreateApplePhone();
$sony = new sony\CreateApplePhone();
$lg = new lg\CreateApplePhone();
// sub namespace
$samsung = new MakeDevice\samsung\CreateApplePhone();



echo $phone->getDeviceName('Iphone6Plus <br>');
echo $sony->getDeviceName('Sony <br>');
echo $lg->getDeviceName('Lg <br>');
echo $samsung->getDeviceName('Samsung <br>');




// from one file 3 namespace not best brackts
require 'namespaces_in_one_file.php';
$newSamsung = new new\MakeDevice\samsung\CreateApplePhone();
echo $newSamsung->getDeviceName('New Samsung <br>');
