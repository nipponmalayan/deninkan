<?php

$serverName = 'localhost';
$dataUser = 'root';
$dataPassword = '';
$dataBase = 'deninkan-db_users';

$conn = mysqli_connect($serverName, $dataUser, $dataPassword, $dataBase);

if (!$conn) {
    die('ERROR: ' . mysqli_connect_error());
}
