<?php

// j'initialise des variables me permettant de savoir
// si le formulaire a été envoyé
// et si les données envoyées sont correctes (identifiant et mot de passe ok)
// ces variables sont utiles uniquement pour la view
$isAuthenticated= false;
$isFormSubmitted = false;


// si le formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    // je change la valeur de $isFormSubmitted
    // pour la mettre à true
    $isFormSubmitted = true;

    // on vérifie les données envoyées
    // si l'email correspond à celui attendu (dans une vrai app, on verifierait s'il l'email existre en BDD)
    // et si le mot de passe est celui attendu
    if ($_POST['email'] === "contact.davidrobert@gmail.com" &&
        $_POST['password'] === "test"
    ) {

        // on démarre la session
        // ça créé un espace de stockage spécifique pour un utilisateur
        // lié à un identifiant unique généré
        session_start();

        // j'accède à l'espace de stockage de session de l'utilisateur
        // avec la super globale $_SESSION
        // et je créé une clé me permettant de savoir si l'utilisateur est connecté
        $_SESSION['is_authenticated'] = true;

        // je modifie la variable contenant l'info si l'utilisateur a réussi à se connecter ou non
        $isAuthenticated = true;
    }

}


require_once('../view/connection-view.php');
