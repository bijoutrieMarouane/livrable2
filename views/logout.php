<?php
    require_once './controllers/ItemsControllers.php';
    require_once './controllers/UsersControllers.php';
session_start(); // Star The Session

session_unset(); // Unset The Data

session_destroy(); // Destroy The Session

header('Location: adminLog');

exit();
