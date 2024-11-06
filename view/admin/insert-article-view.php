
<?php require_once('../../view/admin/partials/_header.php') ?>

<main>

    <h1>Créer un article</h1>

    <form method="post">

        <label for="title">Titre</label>
        <input type="text" name="title" />

        <label for="content">Contenu</label>
        <input type="text" name="content" />

        <label for="image">Image</label>
        <input type="text" name="image" />


        <label for="category">Categorie</label>
        <select name="category">
            <option nvalue="ecologie">Ecologie</option>
            <option nvalue="ecologie">Politique</option>
            <option nvalue="ecologie">Economie</option>
        </select>


        <input type="submit"/>

    </form>

    <?php if ($isArticleCreated) { ?>
        <p>Article bien créé !</p>
    <?php } else { ?>
        <p>Merci de mieux remplir les données !</p>
    <?php } ?>

</main>


<?php require_once('../../view/admin/partials/_footer.php') ?>

