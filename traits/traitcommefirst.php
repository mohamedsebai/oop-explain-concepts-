<?php


trait fingerPrint{

  public function fingerFeature(){
    echo 'your finger print in good from tarit';
  }

}


class newPhone{
  public function fingerFeature(){
    echo 'your finger print in good from class new phone';
  }
}

class relmea extends newPhone{
  use fingerPrint;

  // same method from tarit fingerPrint and class newPhone
  // traits comme first
}


$relmea = new relmea;
echo $relmea->fingerFeature();
















//
