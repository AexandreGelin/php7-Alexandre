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
                <h1 class="display-3">Jumbotron</h1>
                <p style="font-size: 2em;">
                </p>
                <form action="./result.php" method="post">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Firstname</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="firstname">
                  </div>
                  <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Lastname</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="lastname">
                </div>
                <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Email Address</span>
                </div>
                <input type="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="email">
              </div>
                <p><a href="" class="btn btn-primary btn-lg" role="button"><input type="submit" class="btn btn-primary btn-lg" value="envoyer"/></a></p>
              </form>

            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Bootstrap 2018</p>
    </footer>
</body>
</html>
