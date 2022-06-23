<?php
// Lorsque nous arrivons sur la page logout nous lançons les fonctions :

// On vide et on efface toutes les variables stockés dans $_SESSION 
session_unset();

// On détruit la session de l'utilisateur
session_destroy();
