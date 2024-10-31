<?php require_once('../view/partials/_header.php'); ?>

<main>
    <form method="post">

        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" />

        <label for="lastName">Nom</label>
        <input type="text" name="lastName" />

        <label for="message">Message</label>
        <input type="text" name="message" />

        <input type="submit"/>

    </form>

    <?php if($isMessageSent) { ?>

        <?php if ($isFormValid) { ?>
            <p>Message envoyé !</p>
        <?php } else { ?>
            <p>Merci de remplir les champs !</p>
        <?php }  ?>

    <?php }  ?>
</main>


<?php require_once('../view/partials/_footer.php'); ?>
