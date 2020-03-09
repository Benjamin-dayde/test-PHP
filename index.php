<?php


var_dump($_GET);

$new = [
    'nom' => $_GET['nom'], 
    'prenom' => $_GET['prenom'],
    'email'=> $_GET['email']
];


$image = "git_mug.png";

$formulaire = [
    0 =>['nom' => 'Dupont', 'prenom' => 'Jean', 'email'=> 'jdupont@gmail'],
    1 =>['nom' => 'Dupuis', 'prenom' => 'Loïc', 'email'=> 'loic45000@gmail'],
    2 =>['nom' => 'Armand', 'prenom' => 'Edgard', 'email'=> 'armand-e@gmail'],
    3 =>['nom' => 'Durand', 'prenom' => 'Emilie', 'email'=> 'emiliedurand@gmail'],
    4 =>['nom' => 'Martin', 'prenom' => 'Justine', 'email'=> 'juju289@gmail']
];

array_push($formulaire, $new);

//var_dump($formulaire);

// 1. Afficher tous les noms des utilisateurs dans une boucle for
// 2. Afficher tous les noms des utilisateurs sur le document HTML

$nbElem = sizeof($formulaire); // Je récupère la taille du tableau

$liste = " ";

for($i = 0; $i < $nbElem; $i++) {
    $liste .= '<li>' . $formulaire[$i]['nom']. '</li>';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Premiers pas en PHP</title>
</head>
<body>
    <h1>Bonjour!</h1>
    <p>Voici la liste des utilisateurs : </p>

    <!-- Ici la liste des utilisateurs -->
    <ul>
        <?= $liste ?>
    
    
    </ul>

    <hr>
    <p><img src="img/<?= $image ?>" alt=""></p>
</body>
</html>




