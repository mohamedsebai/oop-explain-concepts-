<?php

trait fingerPrint{

  public function fingerFeature(){
    echo 'your finger print in good';
  }

}

trait threeDimensionTuch{

  public function threeD(){
    echo 'your theee three Dimension Tuch is good';
  }

}

trait blackMoon{

  public function blackMoon(){
    echo 'black moon is now your default';
  }

}

trait allfeature{
  use fingerPrint, threeDimensionTuch, blackMoon;
}
class Iphone{
 public $Name = 'Iphone';
 use fingerPrint;

}

class sony{
 use threeDimensionTuch;
}

class lg{
  use blackMoon;
}

class newPhone{
  use allfeature;
}

class relmea extends newPhone{

}

$newPhone = new newPhone;
echo $newPhone->threeD();
echo '<br>';

$relmea = new relmea;
echo $relmea->blackMoon();
















//
