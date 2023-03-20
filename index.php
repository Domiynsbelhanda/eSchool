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
    <?php 
        include('./header.php');
    ?>
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

<!-- Start Footer -->
    <?php
        include('./footer.php');
    ?>
<!-- End Footer -->

<!--Font Awesome JS-->
<script src="js/all.min.js"></script>

<!--JQuery Plugin-->
<script src="js/jquery.min.js"></script>

<!--Bootstrap JS-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>