<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="public/style.css">
    <!-- Bootstrap -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="header">
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top fixed-top">
           <a href="index.php" class="navbar-brand">
               <img src="public/images/logo.png" >
           </a>
           <button class="navbar-toggler" data-toggle="collapse" data-target="#menuhamburger">
               <span class="navbar-toggler-icon"></span>
              </button>
           <div class="collapse navbar-collapse" id="menuhamburger">
             <ul class="navbar-nav m-auto">
                <!-- Dropdown -->
          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">A propos</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                <a class="dropdown-item" href="#">Biographie</a>
                <a class="dropdown-item" href="#">Santé</a>
              </div>
            </li>
               <!-- Dropdown -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Aliments</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                <a class="dropdown-item" href="#">Les allergènes</a>
                <a class="dropdown-item" href="#">Les Farines</a>
                <a class="dropdown-item" href="#">Les Pâtes</a>
              </div>
            </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Vos Recettes</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink2">
              <a class="dropdown-item" href="#">Entrées</a>
              <a class="dropdown-item" href="#">Plats</a>
              <a class="dropdown-item" href="#">Desserts</a>
              <a class="dropdown-item" href="#">En-cas</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Jeux Concours</a>
              <a class="dropdown-item" href="#">Le E-Book des recettes</a>
            </div>
          </li>
          <li class="nav-item-post ">
                 <a href="index.php?action=prepareRecipe" class="nav-link ">Poster une recette</a>
               </li>
        </ul>
             <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher une recette">
            <button class="btn btn-primary" type="submit">Envoyer</button>
              </form>

              <ul class="nav navbar-nav navbar-right">
               <p class="navbar-text">Bonjour Miguel, <br/><a href="#" title="Déconnectez-vous" class="navbar-link">Déconnectez-vous</a></p>
                <!-- <li><a href="#" title="Lien à droite">Lien à droite</a></li>-->
                <li><a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a></li>
              </ul>
           </div>
       </nav>



        </div>

    <?=$content?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/button.js"></script>
</body>
</html>