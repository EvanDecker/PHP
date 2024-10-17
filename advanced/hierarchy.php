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

  public function upgradeHardware($newHardware){
    $this->setHardware($newHardware);
  }

  private function setHardware($newHardware){
    $this->hardware = $newHardware;
  }

  public $computerName;
  protected $computerId;
  private $hardware;
  protected $evansOpinion = "It's a computer, what about it?";
}
/////////////////////////////////////////////////////////////
class Workstation extends Computer {
  function __construct(Computer $computer, $peripherals = 'Standard') {
    $this->computerId = $computer->computerId;
    $this->peripherals = $peripherals;
    $this->evansOpinion = "Work, work...";
    $this->workstationSecret = "Hehehe, Evan's secret candy stash!";
  }

  public function getPeripherals() {
    return $this->peripherals;
  }

  public function upgradePeripherals($newPeripherals) {
    $this->setPeripherals($newPeripherals);
  }

  public function workAtWorkstation($user){
    return $user === 'Evan' ? $this->revealSecret() : 'No secret for you!';
  }

  public function upgradeHardware($newHardware){
    betterEcho("About to change this Workstation's hardware!");
    parent::upgradeHardware($newHardware);
    betterEcho("Phew, all done!");
    betterEcho("New hardware: ", $this->getHardware());
  }

  protected function setPeripherals($newPeripherals) {
    $this->peripherals = $newPeripherals;
  }

  private function revealSecret() {
    return $this->workstationSecret;
  }

  // public function askEvanHisOpinion() {
  //   betterEcho(parent::askEvanHisOpinion());
  //   return $this->evansOpinion;
  // }

  public $peripherals;
  private $workstationSecret;
}

class Mac extends Workstation {
  function __construct(Workstation $workstation) {
    $this->computerId = $workstation->getComputerId();
    $this->peripherals = $workstation->peripherals;
    $this->evansOpinion = "Just reminds me of a Big Mac. God, I'm so hungry...";
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
