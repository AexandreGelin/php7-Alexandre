<?php
require_once(__DIR__.'\src\app_series.php');
require_once(_DIR__.'\src\app_series.php')
 ?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AlphaSeries</title>

    <!-- CSS Bootstrap 4 : https://getbootstrap.com/docs/4.0/getting-started/introduction/ -->
    <link defer rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS Font Awesome 5 : https://fontawesome.com/get-started -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link href="css/alphaseries.css" rel="stylesheet">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">AlphaSeries</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu principal -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-home"></i> Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="classement.php">
                        <i class="fas fa-trophy"></i> Classement
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="serie.php">
                        <i class="fas fa-random"></i> Une série aléatoire
                    </a>
                </li>
            </ul>

            <!-- Formulaire de recherche -->
            <form action="recherche.html" method="post" class="form-inline my-2 my-lg-0">
                <input name="search" class="form-control mr-sm-2" type="text" placeholder="Rechercher une série" aria-label="Rechercher une série">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                    <i class="fa fa-search"></i> <span class="d-md-none">Rechercher</span>
                </button>
            </form>
        </div>
    </nav>

    <main role="main">
        <!-- Header -->
        <div class="jumbotron" style="position: relative">
            <div class="jumbotron-background" style="background-image: url('<?php echo $show['images']['banner'] ?>');"></div>
            <div class="container">
                <h1 class="display-3"><?php echo $show['name'] ?></h1>
            </div>
        </div>

        <!-- Contenu -->
        <div class="container">
            <div class="row">

                <!-- Poster de la série -->
                <div class="col-md-3 d-none d-md-block">
                    <img src="<?php echo $show['images']['poster']; ?>" alt="Poster de <?php echo $show['name']; ?>" class="img-thumbnail">
                </div>

                <!-- Fiche série -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $show['name'] ?>

                                <!-- Affichage de la note avec le bon nombre d'étoiles et un tooltip -->
                                <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="<?php echo number_format($show['statistics']['rating'], 2); ?>">
                                    <?php
                                    for($numberStar=0; $numberStar < $star[0]; $numberStar++){
                                    ?>
                                    <i class="fa fa-star"></i>
                                <?php }
                                if($star[1] >= 50){
                                 ?>
                                    <i class="fa fa-star-half"></i>
                                <?php } ?>
                                </span>
                            </h4>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $show['statistics']['season_count'].'saisons, '.$show['statistics']['episode_count'].'episodes' ?></h6>
                            <h5>
                                <?php echo number_format($show['statistics']['popularity'], 0, ' ', ' '); ?> personnes suivent la série
                            </h5>
                            <p>
                                <!-- Affichage des genres de la série -->
                                <?php
                                for($key=0; $key<count($show['genres']); $key++){
                                 ?>
                                <span class="badge badge-secondary"><?php echo $show['genres'][$key] ?></span>
                            <?php } ?>
                                <small>sortie en <?php echo $show['release_year'] ?> chez <?php echo $show['network'] ?></small>
                            </p>
                            <p class="card-text">
                                <?php echo $show['synopsis']; ?>
                            </p>
                            <a target="_blank" href="<?php echo 'https://www.betaseries.com/serie/'.$show['slug'] ?>" class="card-link">
                                <i class="fa fa-external-link-alt"></i>
                                Voir la fiche sur BetaSeries
                            </a>
                        </div>
                    </div>
                    <br />
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-0">
                                <i class="fab fa-youtube"></i> Bande annonce
                            </h5>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9">
                            <!-- Vidéo youtube, pensez à remplacer opRwgY7RDP0 par l'id youtube de la vidéo -->
                            <iframe width="560" height="315" src="<?php echo 'https://www.youtube.com/embed/'.$show['youtube_id'].'?rel=0&amp;showinfo=0'?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
        </main>

        <!-- Footer -->
        <footer class="container">
            <p>&copy; Les données proviennent du site <a target="_blank" href="https://www.betaseries.com">BetaSeries</a></p>
        </footer>

        <!-- JavaScript Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
        // activation des tooltips bootstrap de partout
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        </script>
    </body>
</html>
