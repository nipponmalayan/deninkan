<?php

function emptyInputSignup(
    $username,
    $email,
    $password,
    $password_confirm,
    $tos_confirm
) {
    $result;
    if (
        empty($username) ||
        empty($email) ||
        empty($password) ||
        empty($password_confirm) ||
        empty($tos_confirm)
    ) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidUID($username)
{
    $result;
    if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidPassword($password)
{
    $result;
    if (
        !preg_match(
            '/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,64}$/',
            $password
        )
    ) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function typoPassword($password, $password_confirm)
{
    $result;
    if ($password !== $password_confirm) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function takenIdentifier($conn, $username, $email)
{
    $sql = 'SELECT * FROM users WHERE usersUID = ? OR userEmail = ?;';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $password)
{
    $sql =
        'INSERT INTO users (usersUID, usersEmail, usersPWD) VALUES (?, ?, ?);';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=stmtfailed');
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../signup.php?error=none');
    exit();
}
