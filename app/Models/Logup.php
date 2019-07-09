<?php

require_once 'User.php';
require_once 'DBConnection.php';

use App\Models\{User,DBConnection};

if (empty($_POST['cedula'])) {
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:8085/a2webpage/logSide.php");
    exit;
} elseif ($_POST) { 
    $response = userLogup($_POST['cedula'], $_POST['full_name'], $_POST['email'], $_POST['phone_number'], $_POST['country'], $_POST['city'], $_POST['dist_code']);
    if ($response) {
        echo 'Usuario Creado con exito';
        header("Location: http://localhost:8085/a2webpage/logSide.php");
    }
}

function userLogup(int $ced, string $name, string $email, int $phone, string $country, string $city, int $code) {
    $user = new User($ced, $name, $email, $phone, $country, $city, $code);
    $connection = new DBConnection;
    $connection->insertUser($user);
    return true;
}