<!--Start Navigation-->
    <?php 
        session_start();
        if (!isset($_SESSION['loggedin'])) {
            header('Location: index.php');
            exit;
        }
        include('./header.php');
        include('settings/database.php');

        $stmt = $con->prepare('SELECT username, email, firstname, lastname, organisation, ville, telephone, naissance, images FROM accounts WHERE id = ?');
        // In this case we can use the account ID to get the account info.
        $stmt->bind_param('i', $_SESSION['id']);
        $stmt->execute();
        $stmt->bind_result($username, $email, $firstname, $lastname, $organisation, $ville, $telephone, $naissance, $images);
        $stmt->fetch();
        $stmt->close();
    ?>
<!--End Navigation-->

<div class="container" style="margin-top: 182px">
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Photos de profile</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="<?=$images?>" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Details du compte</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Nom d'utilisateur</label>
                                <input class="form-control" id="inputUsername" type="text"
                                value="<?=$username?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nom</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?=$firstname?>">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Prénom</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="<?=$lastname?>">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Nom de votre organisation</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="<?=$organisation?>">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Ville</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="<?=$ville?>">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Adresse email</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?=$email?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Numéro de téléphone</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?=$telephone?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Date de naissance</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="<?=$naissance?>">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">Mise à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Footer -->
    <?php
        include('./footer.php');
    ?>
<!-- End Footer -->
