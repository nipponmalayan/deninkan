<?php

if (isset($_POST['submit'])) {
    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $password_confirm = $_POST['pwd_confirm'];
    $tos_confirm = $_POST['tos_confirm'];

    require_once 'DiDATA.php';
    require_once 'DiFUNCTIONS.php';

    if (
        emptyInputSignup(
            $username,
            $email,
            $password,
            $password_confirm,
            $tos_confirm
        ) !== false
    ) {
        header('location: ../signup.php?error=emptyinput');
        exit();
    }

    if (invalidUID($username) !== false) {
        header('location: ../signup.php?error=invaliduid');
        exit();
    }

    if (invalidEmail($email) !== false) {
        header('location: ../signup.php?error=invalidemail');
        exit();
    }

    if (invalidPassword($password) !== false) {
        header('location: ../signup.php?error=invalidpassword');
        exit();
    }

    if (typoPassword($password, $password_confirm) !== false) {
        header('location: ../signup.php?error=passwordtypo');
        exit();
    }

    if (takenIdentifier($conn, $username, $email) !== false) {
        header('location: ../signup.php?error=identifiertaken');
        exit();
    }

    createUser($conn, $username, $email, $password);
} else {
    header('location: ../signup.php');
    exit();
}
