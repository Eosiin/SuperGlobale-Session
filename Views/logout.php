<?php
// Utilisation de session_start pour manipuler les variables de $_SESSION
session_start();

// Require du Controller respectif
require_once "../Controllers/logout-controller.php";
?>

<?php include "elements/top-page.php" ?>

<body class="d-flex flex-column min-vh-100 pt-5 log">

    <p class="text-center text-light h2 deconnection-text pt-5">Vous avez bien été déconnecté</p>
    <div class="text-center mt-3">
        <a class="btn btn-secondary" href="home.php">Retour accueil</a>
    </div>

    <?php include "elements/footer.php" ?>

</body>

</html>