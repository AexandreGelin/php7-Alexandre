=======
Type Scalaires
=======
<?php

$captainName = "Morgan"; //type string
$captainAge = 23; //type integer
$captainHeight = 1.80; //type float
$captainDead = true; //type boolean

$captainStats =[
    'name' => $captainName,
    'age' => $captainAge,
    'height' => $captainHeight,
    'is_dead' => $captainDead,
];
//pour debugger contenu de variable
var_dump($captainName);
var_dump($captainAge);
var_dump($captainHeight);
var_dump($captainDead);


// pour debug moins descriptif
print_r($captainStats);

//savoir de quel type est une variable
var_dump(is_string($captainAge));
var_dump(is_int($captainAge));
var_dump(is_float($captainAge));
var_dump(is_bool($captainAge));
?>
=====
type Null
=====
<?php
//variable non definie
var_dump($nonDef);// Null
var_dump(isset($captainAge)); // true
var_dump(isset($nonDef)); //false
print "c'est fini la \n";
?>

========
LES CONSTANTES
========
<?php
//ne peut pas etre modifiée
define('PIRATE_FLAG', 'tete de mort');
echo PIRATE_FLAG;



 ?>
