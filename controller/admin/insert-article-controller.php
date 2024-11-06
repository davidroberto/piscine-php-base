<?php

require_once('../../service/authentification-service.php');
require_once('../../service/articles-service.php');

redirectNotLoggedUser();

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
        $articleCreated = [
            "title" => $_POST['title'],
            "content" => $_POST['content'],
            "image" => $_POST['image'],
        ];

        $currentArticles = findArticles();

        // j'ajoute dans le tableau des articles sauvés, le nouvel article
        $currentArticles[] = $articleCreated;

        // je convertis mon article en json
        $updatedArticlesJson = json_encode($currentArticles,JSON_PRETTY_PRINT);

        // j'ouvre le fichier json, je stocke mon article
        // dedans et je ferme le fichier json
        $fp = fopen($articlesJsonpath, 'w');
        fwrite($fp, $updatedArticlesJson);
        fclose($fp);

        $isArticleCreated = true;
    }
}



require_once('../../view/admin/insert-article-view.php');