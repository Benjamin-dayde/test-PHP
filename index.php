<?php
    echo 'Hello world' ; // affiche Hello world
    echo "Hello world" ; // affiche Hello world
    $world = 'World';
    echo 'hello $world'; // affiche hello $world
    echo "hello $world"; // affiche hello world


$mot = 'Bonjour tous le monde';
$head = 'bienvenue';
$css = "style.css";
$image = "ok.jpeg";
?>;

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href=<?= $css ?> >
</head>
<body>
    <h1><?= $mot ?></h1>
    <h2><?= $head ?></h2>
    <img src=<?= $image ?> alt="OK">
</body>
</html>




