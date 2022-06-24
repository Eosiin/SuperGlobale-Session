    <header class="background">
        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid ">
                <a class="navbar-brand text-light" href="home.php"><i class="bi bi-house-heart-fill fs-2"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="settings.php">Paramètres</a>
                        </li>
                        <li class="nav-item">
                            <!-- Nous controllons si la $_SESSION['USER'] isset -->
                            <?php if (isset($_SESSION['USER'])) { ?>
                                <a class="nav-link text-light" href="logout.php">Deconnexion</a>
                            <?php } else { ?>
                                <a class="nav-link text-light" href="login.php">Connexion</a>
                            <?php } ?>

                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Titre du site en H1 -->
        <h1 class="text-light text-center mt-5">LHP8 rencontres</h1>
    </header>