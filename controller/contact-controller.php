<?php


$isMessageSent = false;
$isFormValid = false;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $isMessageSent = true;

    if ($_POST['firstName'] &&
        $_POST['lastName'] &&
        $_POST['message']
    ) {
        $isFormValid = true;
    }
}





 require_once('../view/contact-view.php');
