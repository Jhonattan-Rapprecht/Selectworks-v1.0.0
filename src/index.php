<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 1. Get the requested URL path
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Normalize Codespaces behavior
if ($path === 'index.php') {
    $path = '';
}

// DEBUG (optional)
// echo "PATH = '$path'<br>";
// var_dump($path);
// exit;

// 2. Define your routes
$routes = [
    ''             => 'slw-webapp-v1/app-page-templates/selectworks.php',
    'contact'      => 'slw-webapp-v1/app-modules/contact/contact.php',
    'vacatures'    => 'slw-webapp-v1/app-modules/vacatures/vacatures.php',
    'opdrachten'   => 'slw-webapp-v1/app-modules/opdrachten/opdrachten.php',
    'inschrijven'  => 'slw-webapp-v1/app-modules/inschrijven/inschrijfformulier.php',
    'inloggen'     => 'slw-webapp-v1/app-modules/inloggen/inlog-portaal.php',
];

// 3. Route exists?
if (array_key_exists($path, $routes)) {
    include __DIR__ . '/' . $routes[$path];
    exit;
}

// 4. 404 fallback
include __DIR__ . '/slw-webapp-v1/app-controllers/error-controller/error-controller.php';
exit;
