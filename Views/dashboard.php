<?php
session_start();
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