<?php
require_once "../Controllers/login-controller.php";
?>

<!-- On inclut le header contenant le cdn, title, doctype -->
<?php include 'elements/header.php' ?>

<body>
    <form action="" method="POST">
        <h1 class="text-center my-4">Connexion</h1>
        <div class="row justify-content-center pt-5">
            <div class="col-3 border border-secondary rounded shadow p-4">

                <div class="my-2">
                    <label for="login">Login</label><span class="ms-2 text-danger"><?= isset($errors['login']) ? $errors['login'] : '' ?></span>
                    <br>
                    <input type="text" id="login" name="login" placeholder="ex. DURANT">
                </div>

                <div class="my-2">
                    <label for="password">Mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                    <br>
                    <input type="password" id="password" name="password">
                </div>
                <div class="mt-4">
                    <input type="checkbox" id="cgu" name="cgu">
                    <label for="cgu">Rester connecté</label>
                </div>

                <button class="btn btn-dark my-3">Valider</button>
            </div>
        </div>
    </form>
</body>

</html>