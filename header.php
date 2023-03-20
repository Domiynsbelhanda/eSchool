<?php session_start(); ?>
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

                <?php 
                    if (isset($_SESSION['loggedin'])) {
                        if($_SESSION['loggedin']){
                ?>

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