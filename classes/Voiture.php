<?php

class Voiture 
{
    // Attributs
    public $nb_roues = 4;
    public $couleur;
    public $puissance;
    public $essence = 100;

    // Méthodes
    // Le construct se lance une seule fois à l'instanciation de la classe
    public function __construct($color, $power) {
        $this->couleur = $color;
        $this->puissance = $power;
    }

    public function avance($km) {
        if ($this->essence >= $km) {
            echo "Vroum vroum, la voiture avance !";
            $this->essence -= $km;
        } else if ($this->essence < $km) {
            echo "La voiture n'a plus assez d'essence, elle n'avance pas!";
        }
    }

    public function plein() {
        $this->essence = 100;
        echo "La voiture fait le plein d'essence !";
    }

    public function échangeEssence($cible) {
        $this->essence += 30;
        $cible->essence -= 30;
    }
}