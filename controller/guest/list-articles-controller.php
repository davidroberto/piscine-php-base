<?php

require_once('../../config/config.php');

require_once('../../model/articles-repository.php');


// si un input avec un name category a été envoyé en GET
if (array_key_exists('category',$_GET)) {
    // je récupère la valeut de la catégorie envoyée
    $category = $_GET['category'];
    // et je récupère uniquement les articles liées à la catégorie
    $articles = findArticlesByCategory($category);
    // sinon je récupère tous les articles
} else {
    $articles = findArticles();
}


function isStringTooLong($stringToCheck) {
    return mb_strlen($stringToCheck, 'UTF-8') > 50;
}

function shortenString($stringToCut) {
    return substr($stringToCut, 0, 30);
}

require_once('../../view/guest/list-articles-view.php');

?>
