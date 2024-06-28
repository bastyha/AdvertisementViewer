<?php
    // routing
    $req = $_SERVER["REQUEST_URI"];
    switch ($req) {
        case '/rabitTakehome/main':
            require __DIR__ . '\\views\\main.php';
            break;
        case '/rabitTakehome/users':
            require __DIR__ . '\\controllers\\UserController.php';
            break;
        case '/rabitTakehome/advertisements':
            require __DIR__ . '\\controllers\\AdvertisementController.php';
            break;
        default:
            header('Location: /rabitTakehome/main');
            break;
            
    }


?>