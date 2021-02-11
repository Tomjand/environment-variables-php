<?php

// require_once (__DIR__."/vendor/autoload.php");
require_once ("vendor/autoload.php");

echo("<h1>How to use Environmental Variables (phpdotenv for php2)</h1>");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/*$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);*/
/*wors only with: createUnsafeImmutable(__DIR__);*/

echo("<li>getenv():".getenv());

$secret_key = getenv("SECRET_KEY");
echo ("<li> new: ". $secret_key);

// echo("<li> ENV key: ".$_ENV['SECRET_KEY']);
// echo("<li> ENV pass: ".$_ENV['PASSWORD']);
// echo("<li> SERVER: ".$_SERVER['PASSWORD']);
?>