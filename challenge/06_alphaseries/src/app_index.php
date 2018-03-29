<?php
$dir = str_replace("\src", "", __DIR__);


$json = file_get_contents($dir.'/data/show.json');
$shows = json_decode($json, true);

function randomBanner(){
    global $shows;
    $randomKey = array_rand($shows, 1);
    return $randomKey;
};
$serie = $shows[randomBanner()];

function showByPopularity($showA, $showB){
    return $showB['statistics']['popularity'] <=> $showA['statistics']['popularity'];

};
usort($shows, 'showByPopularity');

$popularShow = array_slice($shows, 0, 3);

function showByRating($showA, $showB){
    return $showB['statistics']['rating'] <=> $showA['statistics']['rating'];
};
usort($shows, 'showByRating');

$bestRateShow = array_slice($shows, 0, 3);


?>
