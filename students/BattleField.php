<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior()
    {
        $player= new MarvelWarrior($GLOBALS['warriorName']);
        $player->imageUrl="../students/img/naruto-tag.jpg";
        $player->weapon= new Weapon(1,100);
        $player->weapon->imageUrl="../students/img/KUNAI-NARUTO.jpg";
        $player->saveNew();
    }
    public static function createOtherWarrior()
    {
        $player= new StartrekWarrior($GLOBALS['StartrekWarrior']);
        $player->imageUrl="../students/img/Sakura.webp";
        $player->weapon= new Weapon(1,100);
        $player->weapon->imageUrl="../students/img/katana-de-naruto-uzumaki-de-boruto-97-cm.jpg";
        $player->saveNew();
    }  
}
