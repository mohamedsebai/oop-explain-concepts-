<?php

trait feature1{

  public function fingerFeature(){
    echo 'your finger print in good feature 11111';
  }

}

trait feature2{

  public function fingerFeature(){
    echo 'your finger print in good feature 22222';
  }

}

trait blackMoon{

  public function blackMoon(){
    echo 'black moon is now your default';
  }

}

trait allfeature{
  use feature1, feature2{

    feature1::fingerFeature as feature1Fingerfeature;
    feature2::fingerFeature as feature2Fingerfeature;

    feature2::fingerFeature insteadof feature1;

  }
}

class newPhone{
  use allfeature;
}

class relmea extends newPhone{

}

// $newPhone = new newPhone;
// echo $newPhone->threeD();
// echo '<br>';

$relmea = new relmea;
echo $relmea->feature1Fingerfeature();
echo '<br>';
echo $relmea->feature2Fingerfeature();















//
