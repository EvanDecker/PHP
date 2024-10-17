<?php
namespace advanced\computers;

interface ComputerInterface {
  public function getComputerId();
  public function getHardware();
  public function upgradeHardware($newHardware);
}

trait EvansOpinions {
  function askEvanHisOpinion(){
    return betterEcho("Well, I mean, it's a computer, but... ", $this->evansOpinion);
  }
  protected $evansOpinion;
}

class Computer implements ComputerInterface {
  function __construct($computerId, $computerName = 'Walter', $hardware = 'Standard') {
    $this->computerId = $computerId;
    $this->hardware = $hardware;
    $this->computerName = $computerName;
    $this->evansOpinion = "It's a computer, what about it?";
  }

  public function getComputerId(){
    return $this->computerId;
  }

  public function getHardware(){
    return $this->hardware;
  }

  public function upgradeHardware($newHardware){
    $this->setHardware($newHardware);
  }

  public function askEvanHisOpinion(){
    return $this->evansOpinion;
  }

  private function setHardware($newHardware){
    $this->hardware = $newHardware;
  }

  public function computerMalfunction() {
    //closure
    $frustration = function() {
      $angryTyping = "AHHHHHHHHHHHHHH!!!!!! ANGRY!!!!!!!!!!!";
      betterEcho($angryTyping);
    };
    $frustration();
  }

  protected $evansOpinion;
  public $computerName;
  protected $computerId;
  private $hardware;
  
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
    //closure
    $noSecret = "No secret for you, $user!";
    $secretDenial = function() use($noSecret) {
      return $noSecret;
    };
    return $user === 'Evan' ? $this->revealSecret() : $secretDenial();
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

  use EvansOpinions;
  public $peripherals;
  private $workstationSecret;
}

class Mac extends Workstation {
  function __construct(Workstation $workstation) {
    $this->computerId = $workstation->getComputerId();
    $this->peripherals = $workstation->peripherals;
    $this->evansOpinion = "Just reminds me of a Big Mac. God, I'm so hungry...";
  }
  use EvansOpinions;
}
class PC extends Workstation {
  function __construct(Workstation $workstation) {
    $this->computerId = $workstation->getComputerId();
    $this->peripherals = $workstation->peripherals;
    $this->evansOpinion = "It's gonna bluescreen within 5 seconds probably.";
  }

  private function doWork($cb, $blueCount) {
    betterEcho("Maybe this time I can get some work done... Oh no, not again!!!");
    return $cb($blueCount);
  }

  public function workAtPC() {
    $blueCount = $this->bluescreenCounter;
    //closure as a cb function
    $bluescreen = function() use($blueCount) {
      return $blueCount + 1;
    };
    $this->bluescreenCounter = $this->doWork($bluescreen, $blueCount);
    betterEcho("The bluescreen count is now at ", $this->bluescreenCounter, ".");
  }
  private $bluescreenCounter = 0;
  use EvansOpinions;
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
