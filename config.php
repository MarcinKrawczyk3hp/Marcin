<?php
require_once('vendor/autoload.php');

//loader to taki pomocnik ładowania szablonów
$loader = new Twig\Loader\FilesystemLoader('templates');
//inicjujemy twiga
$twig = new Twig\Environment($loader);

$db = new mysqli('localhost', 'root', '', 'loginform');

?>