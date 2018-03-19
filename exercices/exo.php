<?php

$random = mt_rand (0, 5);
$random2 = mt_rand (0, 4);
$random3 = mt_rand (0, 3);
$random4 = mt_rand (0, 3);

$static = "Tu es un ";
$static2 = "de ";
$static3 = "en terme de ";



$complimentStep1 = ['beau ', 'gentil ', 'super ', 'génial ', "bon ", "magnifique "];

$complimentStep2 = ["animal ", "joueur ", "developpeur ", "defenseur ", "hippopotomonstrosesquippedaliophobique "];

$complimentStep3 = [ "la jungle ", "php ", "league of legend ", "football "];

$complimentStep4 = [ "skill." , "nuclearité.", "congolexicomatisation des lois du marché.", "hippie"];

print  $static . $complimentStep1[$random] . $complimentStep2[$random2]. $static2 . $complimentStep3[$random3] . $static3 . $complimentStep4[$random4]."\n";
