<?php

$isAuthenticated= false;
$isFormSubmitted = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $isFormSubmitted = true;

    // vérifier en BDD que l'email existe et que le mot de passe correspond à l'email
    if ($_POST['email'] === "contact.davidrobert@gmail.com" &&
        $_POST['password'] === "test"
    ) {

        // démarre l'espace de stockage de session
        session_start();

        // variable superglobale, permettant d'accéder à la session
        // de l'utilisateur
        // ici je stocke une info permettant de vérifier si
        // l'utilisateur est connecté ou non
        $_SESSION['is_authenticated'] = true;

        // envoie au navigateur un id de session
        // lié à l'espace de stockage
        // cet id de session est stocké dans les cookies du navigateur


        $isAuthenticated = true;
    }

}


require_once('../view/connection-view.php');
