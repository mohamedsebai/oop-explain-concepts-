<?php

class Iphone{
 public $Name = 'Iphone';
}
class sony{
 public $ram = '12gb';
}
class lg{
 public $inech = '6.7 inech';
}
class samsung{
 public $spaceStorage = '128GB';
}
class relmea{
 public $color = 'red';
}

// there is an error can not extends more than 1 class
class newPhone extends Iphone , sony, lg{

}

$newPhone = new newPhone;
echo $newPhone->Name;
