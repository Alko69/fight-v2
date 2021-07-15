<?php

class Healer extends Character
{
    public $class = 'Healer';

    public function __construct($name)
    {
        parent::__construct($name);
        $this->maxHealth = 100;
        $this->lifePoints = $this->maxHealth;
        $this->healPower = 25;
    }

    public function action($target)
    {
        $spellChoice = rand(1,2);
        if($spellChoice === 1){
            $status = "$this->name attaque $target->name ";
            if($target->immunity){
                $status = $status . "Mais n'inflige aucun dégât";
            } else {
                $target->setLifePoints($this->damage);
                $status = $status . "Il reste $target->lifePoints points de vie à $target->name ";
            }
        } else{
           $status = $this->heal();
        }
        return $status;
    }
    
    public function heal()
    {
        if($this->maxHealth-$this->lifePoints <25){
            $this->lifePoints = $this->maxHealth;
            $diff = $this->maxHealth - $this->lifePoints;
            $status = "$this->name lance un sort de soin et reprend $diff points de vie";
        } else{
            $this->lifePoints += $this->healPower;
            $status = "$this->name reprend $this->healPower points de vie";
        }
        return $status;
    }
}




