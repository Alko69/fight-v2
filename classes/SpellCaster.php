<?php

class SpellCaster extends Character
{
    
    public $class = 'SpellCaster';

    public function __construct($name)
    {
        parent::__construct($name);
        $this->maxHealth = 120;
        $this->lifePoints = $this->maxHealth;
        $this->magicPoints = 50;
        $this->damage /=3;
    }

    public function action($target) {
        $rand = rand(1, 100);
        if ($this->magicPoints == 0) {
            return $this->fist($target);
        } else if ($rand > 30 || $this->immunity) {
            return $this->kamehameha($target);
        } else if ($rand <= 30) {
            return $this->shield();
        }
    }

    public function kamehameha($target) {
        $cost = rand(1, 20);
        if ($this->magicPoints < $cost) {
            $cost = $this->magicPoints;
        }
        $kameDamage = $cost * rand(7, 30) / 10;
        $this->magicPoints -= $cost;
        $status = "$this->name lance un kamehameha sur $target->name ! ";
        if($target->immunity){
            $status = $status . "mais il n'inflige aucun dégât.";
            $target->immunityLoss();
        } else{
            $target->setLifePoints($kameDamage);
            $status = $status . "Il reste $target->lifePoints points de vie à $target->name et $this->magicPoints points de ki à $this->name !";
        }
        return $status;
    }

    public function fist($target) {
        $status = "$this->name n'a plus de magie et donne un coup de poing à $target->name ! Il inflige $this->damage points de dégâts";
        if($target->immunity){
            $status = $status . "Mais il n'inflige aucun dégât.";
        }
        $target->setLifePoints($this->damage);
        "Il reste lui reste $target->lifePoints points de vie !";
        return $status;
    }

    public function shield() {
        $this->immunity = true;
        $status = "$this->name se met en garde !";
        return $status;
    }

    public function setLifePoints($damage) {
        if (!$this->immunity) {
            $this->lifePoints -= round($damage);
            if ($this->lifePoints < 0) {
                $this->lifePoints = 0;
            }
        }
        $this->immunity = false;
        return;
    }
}