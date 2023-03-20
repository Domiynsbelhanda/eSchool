<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">
        Copyright &copy; 2023 || Designed By Stimack ||
        <a href="#login">

        </a>
    </small>
</footer>

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Inscription</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="settings/register.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="nameHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
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
        <form action="settings/login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
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