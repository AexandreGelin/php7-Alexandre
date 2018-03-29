<?php
require_once(__DIR__.'/src/riche.php');
require_once(__DIR__.'/src/pauvre.php');
require_once(__DIR__.'/src/societe.php');
$pauvre = new Pauvre(1500);
$riche = new Riche(50000)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Héritage en PHP</title>
    </head>
    <body>
        <h2>Chat</h2>
        <p><?php print $pauvre->jeVisMal(); ?></p>
        <h2>Chien</h2>

        <p><?php print $riche->jeVisBien(); ?></p>
    </body>
</html>
