<?php
session_start();

require_once '../Controllers/settings-controller.php';

?>

<?php include 'elements/top-page.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php include 'elements/header.php' ?>

    <div class="row justify-content-center m-0 p-0">
        <div class="col-8 border border-dark shadow p-4 m-4 text-center">
            <p class="h1">Bonjour, <?= $_SESSION['USER']['firstname'] ?> <?= $_SESSION['USER']['lastname'] ?></p>

            <!-- mise en place d'un formulaire pour récuperer les données -->
            <form action="" method="POST">

                <div class="mt-2">
                    <fieldset>
                        <legend>Type de recherche :</legend>
                        <div>
                            <input type="radio" id="Homme" name="mySearch" value="Homme" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'Homme' ? 'checked' : '') : '' ?>>
                            <label class="ms-2" for="Homme">Homme</label>
                        </div>

                        <div>
                            <input type="radio" id="Femme" name="mySearch" value="Femme" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'Femme' ? 'checked' : '') : '' ?>>
                            <label class="ms-2" for="Femme">Femme</label>
                        </div>

                        <div>
                            <input type="radio" id="lesDeux" name="mySearch" value="lesDeux" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'lesDeux' ? 'checked' : '') : 'checked' ?>>
                            <label class="ms-2" for="lesDeux">Les deux</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mt-2">
                    <fieldset>
                        <legend>Choix d'affichage :</legend>
                        <div>
                            <input type="radio" id="carte" name="myView" value="cards" <?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == 'cards' ? 'checked' : '') : 'checked' ?>>
                            <label class="ms-2" for="carte">Cartes</label>
                        </div>

                        <div>
                            <input type="radio" id="liste" name="myView" value="list" <?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == 'list' ? 'checked' : '') : '' ?>>
                            <label class="ms-2" for="liste">Liste</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mt-2">
                    <fieldset>
                        <legend>Choix du thème :</legend>

                        <div class="row justify-content-center">
                            <div class="col-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="valentineTheme" name="valentineTheme" <?= isset($_COOKIE['valentineTheme']) ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="valentineTheme">St Valentin Mode</label>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </div>

                <!-- bouton permettant de valider le formulaire -->
                <button class="btn btn-primary mt-3">Enregistrer</button>

            </form>

        </div>
    </div>

    <?php include 'elements/footer.php' ?>

</body>

</html>