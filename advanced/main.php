<?php
require './hierarchy.php';

$computer = new Computer('5234');
$workstation = new Workstation($computer);

betterEcho('Examples of public properties and functions:');
betterEcho('You can access public properties and functions from anywhere!');
betterEcho("\$computer->name returns: ", $computer->computerName);
betterEcho("\$computer->askEvanHisOpinion() returns: ", $computer->askEvanHisOpinion());
betterEcho();

betterEcho('Examples of protected properties and functions:');
betterEcho("You cannot directly reference a protected property like this: \$workstation->evansOpinion");
betterEcho("But you can use a public getter method to access it!");
betterEcho("You must ask Evan for his opinion in order to get it. \$workstation->askEvanHisOpinion() returns: ", $workstation->askEvanHisOpinion());
betterEcho("The setPeripherals method is protected, so it cannot be called like this: \$workstation->setPeripherals('My lucky mouse!')");
betterEcho("But it can be accessed from within the class or its child classes by a different method (a setter)! \$workstation->upgradePeripherals('My lucky mouse!') calls setPeripherals.");
$workstation->upgradePeripherals('My lucky mouse!');
betterEcho("\$workstation->getPeripherals() now returns: ", $workstation->getPeripherals());
betterEcho("\$this->computerId = \$computer->computerId; within the constructor of the Workstation class accessed Computer's computerId property directly! No need for getComputerId here!");

betterEcho('Examples of private poperties and functions:');
betterEcho("Similarly to protected properties and functions, private ones cannot be accessed outside of their class.");
betterEcho("The difference is that child classes also cannot access private properties or functions!");
betterEcho("\$computer->setHardware('Super speed turbo!') won't work because it is inaccessible from here.");
betterEcho("\$workstation->setHardware('Super speed turbo!') won't work because it and the hardware property didn't get inherited from the Computer class! (also still inaccessible)");
betterEcho("\$workstation->upgradeHardware('good stuff') will work though because it's a public method that was passed down!");
$workstation->upgradeHardware('good stuff');
betterEcho("\$workstation->getHardware() now returns: ", $workstation->getHardware());
betterEcho("\$workstation->hardware won't work even after that because hardware is still private.");
betterEcho("The workstation has a private workstationSecret that only Evan knows! :O");
betterEcho("\$workstation->revealSecret() won't work because it's a private method! Sad for you! :(");
betterEcho("If you're not Evan, when you work at the workstation you won't find the secret! It returns: ", $workstation->workAtWorkstation('Greg'));
betterEcho("But if you're Evan and you work at the workstation, it returns: ", $workstation->workAtWorkstation('Evan'));

betterEcho("Inherited functions can be overridden!");
betterEcho("The __construct method from the Computer class is being overridden by the one in the Workstation class.");
betterEcho("The Workstation constructor requires a Computer as an argument (can't have a workstation without a computer).");
betterEcho("It is also possible to override a function and maintain the parent's functionality!");
betterEcho("Workstation overrides the upgradeHardware method inherited from Computer and calls the Computer's version of it within the function!");
betterEcho("\$workstation->upgradeHardware('cool new stuff!') now returns nothing but prints: ");
$workstation->upgradeHardware("cool new stuff");




/////////////////////////////////////////////////////////////
function betterEcho(...$args) {
  foreach($args as $arg){
    echo $arg;
  }
  echo "\n";
}
/////////////////////////////////////////////////////////////