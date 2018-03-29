<?php
$dir = str_replace("\src", "", __DIR__);


$json = file_get_contents($dir.'/data/show.json');
$shows = json_decode($json, true);

$ramdomShow = array_rand($shows, 1);
 ?>
