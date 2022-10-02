<?php
require_once('playablecharacter.php');

class Warrior extends PlayableCharacter
{
    protected string $tribe;

    public function __construct(string $name, int $strength, int $agility, int $intelligence, ?string $tribe = null) //?string $tribe = null, string $class = 'warrior'
    {
        parent::__construct($name, $strength, $agility, $intelligence);
        $this->tribe = $tribe;
    }

    public function getTribe()
    {
        return $this->tribe;
    }
}

$warrior = new Warrior("Jeremy", 9, 10, 5, "Viking du Sud");

var_dump($warrior);
