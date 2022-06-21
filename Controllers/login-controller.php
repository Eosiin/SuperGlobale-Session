<?php
session_start();


$errors = [];
$passwordHash = '$2y$10$4uNpCg7Fr9GccSOFdui6aO/RUgpJbgDWM.LQu6eoAxA/1DNsaDpsu';
$login = 'admin';

if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] == '') {
        $errors['login'] = "Champ obligatoire";
    } elseif ($_POST['login'] != $login) {
        $errors['login'] = 'Login incorrect';
    }

    if ($_POST['password'] == '') {
        $errors['password'] = "Champ obligatoire";
    } elseif (!password_verify($_POST['password'], $passwordHash)) {
        $errors['password'] = 'Mot de passe incorrect';
    }
    if (count($errors) == 0) {
        $_SESSION['USER'] = [
            'lastname' => 'Bon',
            'firstname' => 'Jean',
            'role' => 1
        ];
        header('Location: dashboard.php');
    }
}
