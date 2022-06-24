<?php
session_start();

// Nous appelons le controller repspectif
require_once "../Controllers/home-controller.php";
?>


<!-- element top page -->
<?php include "elements/top-page.php" ?>

<body>

    <!-- navbar -->
    <?php include "elements/header.php" ?>

    <!-- Conditions d'affichage selon la valeur de $display -->
    <?php if ($display == 'cards') { ?>

        <!-- Affichage en cards -->
        <div class="row p-0 mx-0 mb-5">
            <?php
            foreach ($array as $key => $value) {

                // nous allons trier en fonction du genre
                if ($search != 'lesDeux' && $value["gender"] != $search) {
                    continue;
                }
            ?>
                <div class="col-3 mt-3">
                    <div class="card">
                        <img src="../Public/img/<?= $value["picture"] ?>.webp" class="foto" alt="<?= $value["pseudo"] ?>">
                        <div class="card-body">
                            <p class="card-title fs-5"><?= $value["pseudo"] ?></p>
                            <p class="card-text"><?= $value["gender"] ?> cherche <?= $value['search'] ?></p>
                            <a href="index2.php?page=<?= $key ?>" class="btn ecriture border border-dark">Choisir</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    <?php } else { ?>

        <!-- Affichage en liste / tableau -->
        <table class="table mb-5">
            <thead>
                <tr class="text-center align-middle tableau">
                    <th scope="col">#</th>
                    <th scope="col">Photos</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Recherche</th>
                    <th scope="col">Favoris</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($array as $key => $value) {

                    // nous allons trier en fonction du genre
                    if ($search != 'lesDeux' && $value["gender"] != $search) {
                        continue;
                    }

                ?>
                    <tr class="text-center align-middle">
                        <td><?= $key ?></td>
                        <td><img class="liste" src="../Public/img/<?= $value["picture"] ?>.webp"></td>
                        <td><?= $value["pseudo"] ?></td>
                        <td><?= $value["search"] ?></td>
                        <td>
                            <button class="btn tableau"><i class="bi bi-arrow-through-heart-fill"></i></button>
                        </td>
                    </tr>

                    <!-- mise en place d'une modale -->
                    <div class="modal fade" id="modal<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression d'un profil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Voulez-vous supprimer <?= $value['pseudo'] ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-primary">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </tbody>
        </table>

    <?php } ?>

    <!-- footer  -->
    <?php include "elements/footer.php" ?>

</body>

</html>