<?php
// Utilisation de session_start pour manipuler les variables de $_SESSION
session_start();
// Require du Controller respectif
require_once('../Controllers/dashboard-controller.php');
?>

<?php include 'elements/header.php' ?>

<body>
    <h1 class="text-center mt-5">This is dashboard</h1>
    <p class="text-center fs-2 text-primary">Bonjour <?= $_SESSION['USER']['firstname'] ?> <?= $_SESSION['USER']['lastname'] ?></p>
    <div class="text-center">
        <a class=" btn btn-secondary" href="logout.php">Deconnexion</a>
    </div>

</body>

</html>