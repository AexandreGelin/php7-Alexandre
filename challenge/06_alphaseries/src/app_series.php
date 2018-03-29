<?php
$dir = str_replace("\src", "", __DIR__);


$json = file_get_contents($dir.'/data/show.json');
$shows = json_decode($json, true);


$slug = $_GET['slug'];
$show = $shows[$slug];
$star = explode('.', number_format($show['statistics']['rating'], 2));
 ?>
