<?php

$numberA = 5;
$numberB = 3;
$operator = '+';
$resultat;

if(is_numeric($numberA) == true && is_numeric($numberB) == true){
    if($operator == "/" && $numberB == 0){
        die( "Impossible de diviser par 0. \n");
    }
    else{
        switch ($operator) {
            case '+':
                $resultat = $numberA + $numberB;
                print "le resultat est : " . $resultat ."\n";
                break;
            case '-':
                $resultat = $numberA - $numberB;
                print "le resultat est : " . $resultat ."\n";
                break;
            case '*':
                $resultat = $numberA * $numberB;
                print "le resultat est : " . $resultat ."\n";
                break;
            case '/':
                $resultat = $numberA / $numberB;
                print "le resultat est : " . $resultat ."\n";
                break;
            default:
                print "Erreur de calcul. \n";
                break;
        }
    }

}
else{
    die( "Impossible de calculer. \n");
}
