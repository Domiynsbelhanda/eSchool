<?php session_start(); ?>

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

                <?php 
                    if (isset($_SESSION['loggedin'])) {
                        if($_SESSION['loggedin']){
                ?>

                <li class="nav-item custom-nav-item">
                    <a href="profile.php" class="nav-link">
                        Profil
                    </a>
                </li>

                <li class="nav-item custom-nav-item">
                    <a href="settings/logout.php" class="nav-link">
                        Deconnexion
                    </a>
                </li>

                <?php 
                    }
                        } ?>

                <?php 
                    if (!isset($_SESSION['loggedin'])) {
                ?>

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

                <?php 
                    } ?>

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