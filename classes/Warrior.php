<?php

class Warrior extends Character
{
    public $immunity = false;
    public $class = 'Warrior';

    public function __construct($name) 
    {
        parent::__construct($name);
        $this->damage+=5;
        $this->maxHealth = 130;
        $this->lifePoints = $this->maxHealth;
    }

    public function action($target) 
    {
        $actionChoice = rand(1,2);
        if($actionChoice === 1){
            return $this->basicAttack($target);
        } else {
            return $this->strongAttack($target);
        }
    }

    public function basicAttack($target)
    {
        $status = "<strong>$this->name</strong> attaque $target->name! ";
        if ($target->immunity){
            $target->immunityLoss();
            $status = $status . "Mais il n'inflige aucun dégât";
        } else{
            $target->setLifePoints($this->damage);
            $status = $status . "Il reste $target->lifePoints points de vie à $target->name ! ";
        }
        return $status;
    }

    public function strongAttack($target)
    {
        $status = "<strong> $this->name </strong> lance une attaque puissante sur $target->name !";
        if($target->immunity){
            $target->immunityLoss();
            $status = $status . "Mais il n'inflige aucun dégât";
        } else {
            $target->setLifePoints($this->damage+5);
            $status = $status . "Il reste $target->lifePoints points de vie à $target->name ! ";
        }
        return $status;
    }
}