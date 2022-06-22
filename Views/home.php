<?php
require_once "../Controllers/home-controller.php";
?>

<?php include "elements/header.php"?>

    <div class="row">
        <?php
        foreach ($array as $key => $value) { ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img src="../Public/img/<?= $value["picture"] ?>.webp" class="foto" alt="<?= $value["pseudo"] ?>">
                    <div class=" card-body">
                        <h5 class="card-title"><?= $value["pseudo"] ?></h5>
                        <p class="card-text"><?= $value["gender"]  ?> cherche <?= $value['search'] ?></p>
                        <a href="index2.php?page=<?= $key ?>" class="btn ecriture border border-dark">Choisir</a>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <table class="table">
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
            foreach ($array as $key => $value) { ?>
                <tr class="text-center align-middle">
                    <td><?= $key ?></td>
                    <td><img class="liste" src="../Public/img/<?= $value["picture"] ?>.webp"></td>
                    <td><?= $value["pseudo"] ?></td>
                    <td><?= $value["search"] ?></td>
                    <td>

                        <button class="btn tableau"><i class="bi bi-arrow-through-heart-fill"></i></button>
                    </td>
                </tr>

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

  <?php include "elements/footer.php" ?>