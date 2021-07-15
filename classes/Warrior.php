<?php

class Warrior extends Character
{
    public $immunity = false;
    public $class = 'Warrior';

    public function __construct($name) 
    {
        parent::__construct($name);
        $this->damage+=10;
    }

    public function action($target) 
    {
        $status = "<strong>$this->name</strong> attaque $target->name! "; 
        if($target->immunity){
            $status = $status . "Mais il n'inflige aucun dégât.";
            $target->immunityLoss();
        } else{
            $target->setLifePoints($this->damage);
            $status = $status . "Il reste $target->lifePoints points de vie à $target->name ! ";
        }
        return $status;
    }
}