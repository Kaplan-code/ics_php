<?php
require_once('playablecharacter.php');

class Magician extends PlayableCharacter
{
    private int $power;

    public function __construct(string $name, int $strength, int $agility, int $intelligence)
    {
        parent::__construct($name, $strength, $agility, $intelligence);
        $this->power = parent::getAgility() * parent::getIntelligence() / 1.75;
    }

    public function getPower()
    {
        return $this->power;
    }
}

$magician = new Magician("Jeremy", 9, 10, 5);

var_dump($magician);
