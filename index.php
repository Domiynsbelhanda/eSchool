<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--    Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--    Font Awesome CSS-->
    <link rel="stylesheet" href="css/all.min.css">

    <!--    Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&display=swap" rel="stylesheet">

    <!--    Custom Css -->
    <link rel="stylesheet" href="css/style.css">

    <title>eSchool</title>
</head>
<body>
<!--Start Navigation-->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">eSchool</a>
        <span class="navbar-text">Apprendre et mettre en œuvre</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="ms-5 navbar-nav custom-nav">
                <li class="nav-item custom-nav-item">
                    <a href="index.php" class="nav-link">
                        Accueil
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="#" class="nav-link">
                        Cours
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="#" class="nav-link">
                        Paiement
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="#" class="nav-link">
                        Profil
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="#" class="nav-link">
                        Deconnexion
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="nav-link">
                        Connexion
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" class="nav-link">
                        Inscription
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="#" class="nav-link">
                        FeedBack
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="#" class="nav-link">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--End Navigation-->

<!--Start Header Section-->
<div class="container-fluid remove-image-marge">
    <div class="image-parent">
        <img class="img-header" src="image/header_image.webp" alt="image-learning-header">
    </div>

    <div class="img-overlay"></div>

    <div class="img-content">
        <h1 class="my-content">
            Bienvenue sur eSchool
        </h1>
        <small class="my-content">
            Apprendre et mettre en œuvre.
        </small>
        <br>
        <a href="#" class="btn btn-danger">Commencer</a>
    </div>
</div>
<!--End Header Section-->

<!--Start Text Banner-->
<div class="container-fluid bg-danger text-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5>
                <i class="fas fa-book-open mr-3"></i> 100+ Cours en ligne
            </h5>
        </div>

        <div class="col-sm">
            <h5>
                <i class="fas fa-users mr-3"></i> Instructeurs qualifiés
            </h5>
        </div>

        <div class="col-sm">
            <h5>
                <i class="fas fa-keyboard mr-3"></i> Accessible en ligne
            </h5>
        </div>

        <div class="col-sm">
            <h5>
                <i class="fas fa-dollar-sign mr-3"></i> Retour de paiement garanti*
            </h5>
        </div>
    </div>
</div>
<!--End Text Banner-->


<!--Start Most Popular Course-->
<div class="container mt-5">
    <h1 class="text-center"> Cours populaire</h1>
    <!--    Start Most Popular Course 1st Card Deck-->
    <div class="row">
        <div class="col-lg-3 card m-5">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    Card title
                </h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
                <a href="#" class="btn btn-primary">S'Inscrire</a>
            </div>
        </div>

        <div class="col-lg-3 card m-5">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    Card title
                </h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
                <a href="#" class="btn btn-primary">S'Inscrire</a>
            </div>
        </div>

        <div class="col-lg-3 card m-5">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    Card title
                </h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
                <a href="#" class="btn btn-primary">S'Inscrire</a>
            </div>
        </div>

        <div class="col-lg-3 card m-5">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    Card title
                </h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
                <a href="#" class="btn btn-primary">S'Inscrire</a>
            </div>
        </div>
    </div>
</div>
<!--End Most Popular Course-->

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Inscription</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Connexion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
      </div>
    </div>
  </div>
</div>

<!--Font Awesome JS-->
<script src="js/all.min.js"></script>

<!--JQuery Plugin-->
<script src="js/jquery.min.js"></script>

<!--Bootstrap JS-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>