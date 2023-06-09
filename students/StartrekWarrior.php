<?php
require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['StartrekWarrior'] = 'poin';
class StartrekWarrior extends Warrior

{
   public int $mentalPower;

   public function getPower()
   {
       return  $this->mentalPower ;
   }
   public function __construct(string $name)
   {
      parent::__construct($name);
      $this->mentalPower = 8; 
   }
}