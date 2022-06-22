<?php
require_once "../Controllers/home-controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;400&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Public/css/style.css">
</head>

<body>
    <header class="background">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid ">
                <a class="navbar-brand text-light" href="#">Site de rencontre</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Log in</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="text-light text-center mt-5">LHP8 rencontres</h1>
    </header>
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
    <footer>
        <p class="text-center pt-5 ">copyright</p>
    </footer>
</body>

</html>