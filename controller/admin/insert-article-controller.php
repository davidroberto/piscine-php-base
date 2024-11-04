<?php

// je démarre la session
session_start();

// si la clé is_authenticated n'existe pas dans la session de l'utilisateur
// ou qu'elle n'est pas égale à true
if (!key_exists('is_authenticated', $_SESSION)  ||
    !$_SESSION['is_authenticated']) {

    // ça redirige vers la page de connexion
    header('location: http://localhost:8888/piscine-php-test/controller/guest/connection-controller.php');
}


$isArticleCreated = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['title'] &&
        $_POST['content'] &&
        $_POST['image'] &&
        mb_strlen($_POST['title']) > 3 &&
        mb_strlen($_POST['content']) > 4 &&
        mb_strlen($_POST['image']) > 2
    ) {

        // je créé un tableau contenant toutes mes valeurs
        // issues du formulaire
        $article = [
            "title" => $_POST['title'],
            "content" => $_POST['content'],
            "image" => $_POST['image'],
        ];

        // je récupère le chemin du fichier json
        // qui servira à stocker les données
        $path = './articles.json';

        // je convertis mon article en json
        $jsonString = json_encode($article,JSON_PRETTY_PRINT);

        // j'ouvre le fichier json, je stocke mon article
        // dedans et je ferme le fichier json
        $fp = fopen($path, 'w');
        fwrite($fp, $jsonString);
        fclose($fp);

        $isArticleCreated = true;
    }
}





require_once('../../view/admin/insert-article-view.php');