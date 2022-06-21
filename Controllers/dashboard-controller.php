<?php
// A l'aide de isset nous controlons que $_SESSION['USER'] est présente, dans le cas contraire on fait une redirection a l'aide de la fonction header
if (!isset($_SESSION['USER'])) {
    // redirection vers la page login.php
    header("Location: login.php");
}
