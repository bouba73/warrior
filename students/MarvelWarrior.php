<?php
require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['MarvelWarrior'] = 'tueur';
class MarvelWarrior extends Warrior
{
    public int $superPower;
    public function getPower()
    {
        return  $this->superPower ;
    } 
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->superPower = 100;
    }
}