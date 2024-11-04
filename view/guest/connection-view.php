<?php require_once('../../view/guest/partials/_header.php'); ?>


<main>

    <?php if ($isFormSubmitted && $hasFormError) { ?>

        <p>Utilisateur non reconnu. Veuillez créer un compte</p>

    <?php } ?>

    <p>Formulaire de connexion :</p>
    <form method="post">

        <label for="email">Email</label>
        <input type="email" name="email" />

        <label for="password">Password</label>
        <input type="password" name="password" />

        <input type="submit"/>

    </form>


</main>


<?php require_once('../../view/guest/partials/_footer.php'); ?>
