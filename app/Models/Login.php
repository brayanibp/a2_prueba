<?php

require_once 'User.php';
require_once 'DBConnection.php';

use App\Models\{User,DBConnection};

if (empty($_POST['log_email'])) {
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:8085/a2webpage/logSide.php");
    exit;
} elseif (!empty($_POST['log_email'])) {

    $user = userLogin($_POST['log_email'],'');
    if ($user) {
        session_start();
        $_SESSION['user'] = $user;
        header("Location: http://localhost:8085/a2webpage/index.php");
    }
}

function userLogin(string $email, string $password) {
    $connection = new DBConnection;
    $user = $connection->selectUserByEmail($email);
    return $user;
}