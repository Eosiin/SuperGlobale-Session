<?php


// if (isset($_POST['login'])) {

// // 3 - nous vérifions si le champ respectif est vide
// if ($_POST['login'] == '') {
// // si c vide, nous allons creer un clef dans le tableau d'erreurs

// // Nous utilison la fonction preg_match pour valider le format
// } else if (!preg_match($regexName, $_POST['login'])) {
// // si mauvais format, message d'erreur
// $errors['login'] = "Format invalide";
// }
// };
var_dump($_POST);
$errors = [];
$HASH = '$2y$10$62AmDiaYVINexnqv.vLn2.MzzbIVaCm/MYbuA4LNjZy1s6leNjE6q';
$login = 'admin';
$password = 'admin';
if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] == '') {
        $errors['login'] = "Champ obligatoire";
    }

    if ($_POST['password'] == '') {
        $errors['password'] = "Champ obligatoire";
    }
}

var_dump($errors);
