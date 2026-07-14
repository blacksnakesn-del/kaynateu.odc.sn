 
<?php

    $routes = [

    "/" => [
        "controller" => "AuthController",
        "method" => "index"
    ],

    "login" => [
        "controller" => "AuthController",
        "method" => "login"
    ],

    "register" => [
        "controller" => "AuthController",
        "method" => "register"
    ],

    "logout" => [
        "controller" => "AuthController",
        "method" => "logout"
    ],

    "dashboard" => [
        "controller" => "DashboardController",
        "method" => "index"
    ],

    "gestion" => [
        "controller" => "GestionController",
        "method" => "index"
    ],

    "paiement" => [
        "controller" => "PaiementController",
        "method" => "index"
    ],

    "campagne" => [
        "controller" => "CampagneController",
        "method" => "index"
    ]

];