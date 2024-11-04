<?php

$isFormSubmitted = false;
$hasFormError = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $isFormSubmitted = true;

    if ($_POST['email'] === "contact.davidrobert@gmail.com" &&
        $_POST['password'] === "test"
    ) {
        session_start();

        $_SESSION['is_authenticated'] = true;

        header('location: http://localhost:8888/piscine-php-test/controller/admin/dashboard-controller.php');
    } else {

        $hasFormError = true;

    }

}


require_once('../../view/guest/connection-view.php');
