<?php

require_once 'app/Models/User.php';
require_once 'app/Models/DBConnection.php';

use App\Models\{User,DBConnection};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
<?php
if (!session_id()) @ session_start();
if (isset($_SESSION['user'])) {
?>
        <nav class="navbar">
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        BIENVENIDO
                    </li>
                    <li class="nav-item">
                        <span><?php echo $_SESSION['user']->getName(); ?></span>
                    </li>
                </ul>
            </div>
        </nav>
<?php
} else {
    header("Location: http://localhost:8085/a2webpage/index.php");
}
?>
    
</body>
</html>