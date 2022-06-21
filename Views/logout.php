<?php
session_start();
require_once "../Controllers/logout-controller.php";
?>

<?php
include "elements/header.php";
?>

<body>
    <p class="text-center fs-2 mt-4">Vous avez bien été déconnecté</p>
    <div class="text-center">
        <a class="btn btn-danger" href="login.php">Retour accueil</a>
    </div>
</body>

</html>