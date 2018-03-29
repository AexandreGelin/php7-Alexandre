<?php
$car = [
    'marque'=> 'peugeot',
    'type' => 'SUV',
    'chevaux' => '110'
];

class Car
{
    protected $marque;
    protected $type;
    protected $chevaux;

    public function __construc(string $marque, string $type, int $chevaux = 0)
    {
        $this->marque = $marque;
        $this->type = $type;
        $this->chevaux = $chevaux;
    }

    public function __toString(){
        return "La voiture est une " .$this->marque ."qui possede" .$this->chevaux ."chevaux.";
    }

}

$voitureDeCourse = new Car("BMW", "spotive", 345);
 ?>

 <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">La voiture en objet</h1>
                <pre>
                    <?php print $voitureDeCourse->__toString(); ?>

                </pre>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Bootstrap 2018</p>
    </footer>
</body>
</html>
