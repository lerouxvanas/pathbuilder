<?php
declare(strict_types=1);
namespace MyApp;
require '../vendor/autoload.php';
require_once __DIR__ . '/config/config.php';

//autoload core libraries
spl_autoload_register(function ($className) {
    $path = __DIR__ . '/libraries/' . $className . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

/*
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

if (!isset($_COOKIE['jwt'])) {
    $key = "your_secret_key";
    $payload = array(
        "user_id" => 123,
        "username" => "john_doe"
    );
    $token = JWT::encode($payload, $key, 'HS256');
    setcookie("jwt", $token, time() + (86400 * 30), "/", "", false, httponly: true);
} else {
    $token = $_COOKIE['jwt'];
    $k = "your_secret_key.";
    try {
        $decoded = JWT::decode($token, new Key($k, 'HS256'));
        //return $decoded;
    } catch (\Exception $e) {
        echo "Token Verification Failed: " . $e->getMessage();
    }
}



$request = $_SERVER['REQUEST_URI'];
$viewDir = '../../app/views/';



switch ($request) {
    case '':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/home':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/api':
        require __DIR__ . '/api.php';
        break;

    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
*/

