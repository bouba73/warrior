<?php
require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['PokemonWarrior'] = 'sakura';
class PokemonWarrior extends Warrior
{
    public int $level;
    public function getPower()
   {
       return  $this->level;
   }
   public function __construct(string $name)
   {
    parent::__construct($name);
    $this->level = 1;
   }
    
}