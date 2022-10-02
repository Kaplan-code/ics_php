<?php
class PlayableCharacter
{
    private int $id;
    protected string $name;
    protected int $strength;
    protected int $agility;
    protected int $intelligence;
    // protected string $tribe;
    // protected string $class;

    public function __construct(string $name, int $strength, int $agility, int $intelligence) //?string $tribe = null, string $class = 'warrior'
    {
        $this->id = random_int(1, 100);
        $this->name = $name;
        $this->strength = $strength;
        $this->agility = $agility;
        $this->intelligence = $intelligence;
        // $this->tribe = $tribe;
        // $this->class = $class;
    }

    public function closeHit()
    {
        return false;
    }

    public function distanceHit()
    {
        return false;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getAgility()
    {
        return $this->agility;
    }

    public function getIntelligence()
    {
        return $this->intelligence;
    }

    // public function getTribe()
    // {
    //     return $this->tribe;
    // }

    // public function getClass()
    // {
    //     return $this->class;
    // }
}

// $myPerso = new PlayableCharacter("Jeremy", 9, 10, 5, "Viking du Sud", "warrior");

// var_dump($myPerso);
