<?php

require "vendor/autoload.php";

echo("<h1>How to use Environmental Variables (phpdotenv for php)</h1>");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/*$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);*/
/*wors only with: createUnsafeImmutable(__DIR__);*/
/*echo("<li>getenv():".$test); */

echo("<li> $_ENV key: ".$_ENV['SECRET_KEY']);
echo("<li> $_ENV pass: ".$_ENV['PASSWORD']);
echo("<li> $_SERVER: ".$_SERVER['PASSWORD']);
?>