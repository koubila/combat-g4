<?php

require 'classes/Voiture.php';

$voiture1 = new Voiture('vert', 4); // new = instancie la classe
$voiture2 = new Voiture('blanc', 7);

$voiture1->avance(85);
echo '<br>';
// $voiture2->échangeEssence($voiture1);
// $voiture2->échangeEssence($voiture1);
$voiture1->échangeEssence($voiture2);

// $voiture2->essence += 150;


var_dump($voiture1, $voiture2);