<?php
    require_once 'vendor/autoload.php';
    use Dotenv\Dotenv;

    session_start();
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    define('DB_HOST', $_ENV['DB_HOST']);
    define('DB_NAME', $_ENV['DB_NAME']);
    define('DB_USERNAME', $_ENV['DB_USERNAME']);
    define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
    define("BASE_URL", $_ENV['BASE_URL']);
    define("BASE_ORIGIN", $_ENV['BASE_ORIGIN']);
   