<?php
class Computer {
  function __construct($computerId, $computerName = 'Walter', $hardware = 'Standard') {
    $this->computerId = $computerId;
    $this->hardware = $hardware;
    $this->computerName = $computerName;
  }

  public function getComputerId(){
    return $this->computerId;
  }

  public function getHardware(){
    return $this->hardware;
  }

  public function askEvanHisOpinion() {
    return $this->evansOpinion;
  }

  private function setHardware($newHardware){
    $this->hardware = $newHardware;
  }

  public $computerName;
  protected $computerId;
  protected $hardware;
  protected $evansOpinion = "It's a computer, what about it?";
}
/////////////////////////////////////////////////////////////
class Workstation extends Computer {
  function __construct(Computer $computer, $peripherals = 'Standard') {
    $this->computerId = $computer->getComputerId();
    $this->hardware = $computer->getHardware();
    $this->peripherals = $peripherals;
    $this->evansOpinion = "Work, work...";
  }

  public function getPeripherals() {
    return $this->peripherals;
  }

  public function upgradePeripherals($newPeripherals) {
    $this->setPeripherals($newPeripherals);
  }

  protected function setPeripherals($newPeripherals) {
    $this->peripherals = $newPeripherals;
  }

  public $peripherals;
}

class Mac extends Workstation {
  function __construct(Workstation $workstation) {
    $this->computerId = $workstation->getComputerId();
    $this->hardware = $workstation->getHardware();
    $this->peripherals = $workstation->peripherals;
    $this->evansOpinion = "Just reminds me of a Big Mac. I'm so hungry...";
  }
}
class PC extends Workstation {

}
/////////////////////////////////////////////////////////////
class Server extends Computer {
  protected $url;
}

class Webserver extends Server {

}
class DatabaseServer extends Server {

  protected $databaseType;
}
/////////////////////////////////////////////////////////////