<?php require_once('../../view/guest/partials/_header.php'); ?>

<main>

    <h1>Les articles du blog</h1>


    <p>Filtrer les articles : </p>

    <form method="get">
        <label for="category">Categorie</label>
        <select name="category">
            <option nvalue="ecologie">Ecologie</option>
            <option nvalue="ecologie">Politique</option>
            <option nvalue="ecologie">Economie</option>
        </select>

        <input type="submit">
    </form>



    <?php foreach ($articles as $article) { ?>

        <article>
            <?php if (isStringTooLong($article['title'])) { ?>
                <h2><?php echo shortenString($article['title']) ?></h2>
            <?php } else { ?>
                <h2><?php echo $article['title']; ?></h2>
            <?php } ?>

            <p><?php echo $article['content']; ?></p>
            <p>Catégorie : <?php echo $article['category']; ?></p>
            <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
        </article>

    <?php } ?>


</main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>