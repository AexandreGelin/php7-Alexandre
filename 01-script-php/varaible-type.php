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

var_dump($captainName);
var_dump($captainAge);
var_dump($captainHeight);
var_dump($captainDead);
