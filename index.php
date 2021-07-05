<?php

require 'classes/Voiture.php';

$voiture1 = new Voiture('vert', 4); // new = instancie la classe
$voiture2 = new Voiture('blanc', 7);

$voiture1->avance(85);
echo '<br>';


var_dump($voiture1, $voiture2);