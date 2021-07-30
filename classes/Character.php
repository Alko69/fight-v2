<?php

class Character
{
    public $name;
    protected $lifePoints = 130;
    public $damage = 15;
    public $immunity = false;
    public $magicPoints = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Getter : récupérer un attribut
    public function getLifePoints() 
    {
        return $this->lifePoints;
    }

    // Setter : modifier un attribut
    public function setLifePoints($damage) 
    {
        $this->lifePoints -= round($damage);
        if ($this->lifePoints <= 0) {
            $this->lifePoints = 0;
        }
        return;
    }

    public function isAlive() 
    {
        if ($this->lifePoints > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function immunity()
    {
        $this->immunity = true;
        return $this->immunity;
    }

    public function immunityLoss()
    {
        $this->immunity = false;
        return $this->immunity;
    }

}