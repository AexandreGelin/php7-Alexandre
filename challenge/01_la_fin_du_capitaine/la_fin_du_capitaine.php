<?php

$captainAge = 23;
$captainName = "Jacques Spareau";
$captainIsDead = true;
$captainLastWords = "AAaaargh...";

$captain = [
    'year' => $captainAge,
    'name' => $captainName,
    'is_dead' => $captainIsDead,
    'famous_last_words' => $captainLastWords,
];


if($captain['is_dead'] == true)
{
print 'Le capitaine '.$captain[name];
print " est mort à l'age de ".  $captain[year] . " ans.\n";
print 'Ses derniers mots étaient "' . $captain[famous_last_words] . "/ \n";
}
