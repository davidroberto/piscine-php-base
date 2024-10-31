<?php require_once('./partials/_header.php'); ?>

<main>

    <h1>Créer un article</h1>

    <form method="post">

        <label for="title">Titre</label>
        <input type="text" name="title" />

        <label for="content">Contenu</label>
        <input type="text" name="content" />

        <label for="image">Image</label>
        <input type="text" name="image" />

        <input type="submit"/>

    </form>


    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
        <p>Vous avez envoyé des données</p>
    <?php } ?>

</main>

<?php require_once('./partials/_footer.php'); ?>
