<?php

$numberA = (float)$argv[1];
$operator = $argv[2];
$numberB = (float)$argv[3];
$resultat;

if (count($argv) == 4) {
    if (is_numeric($numberA) == true && is_numeric($numberB) == true){
        if($operator == "/" && $numberB == 0){
            die("Impossible de diviser par 0. \n");
        }
        else {
            switch ($operator) {
                case "+":
                    $resultat = $numberA + $numberB;
                    print "Le resultat est : " . $resultat . "\n";
                    break;
                case "-":
                    $resultat = $numberA - $numberB;
                    print "Le resultat est : " . $resultat . "\n";
                    break;
                case "x":
                    $resultat = $numberA * $numberB;
                    print "Le resultat est : " . $resultat . "\n";
                    break;
                case "/":
                    $resultat = $numberA / $numberB;
                    print "Le resultat est : " . $resultat . "\n";
                    break;

                default:
                    print "Impossible de calculer. \n";
                    break;
            }
        }
    }
    else {
        die("Impossible de calculer. \n");
    }
}
else{
    die("Impossible de calculer \n");
}
