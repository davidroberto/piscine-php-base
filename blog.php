<?php

    $articleJsonFilePath = './articles.json';

    $articleJson = file_get_contents($articleJsonFilePath);

    $article = json_decode($articleJson, true);

    function isStringTooLong($stringToCheck) {
        return mb_strlen($stringToCheck, 'UTF-8') > 50;
    }

    function shortenString($stringToCut) {
        return substr($stringToCut, 0, 30);
    }

?>


<?php require_once('./partials/_header.php'); ?>

    <main>

        <h1>Les articles du blog</h1>

        <article>
            <?php if (isStringTooLong($article['title'])) { ?>
                <h2><?php echo shortenString($article['title']) ?></h2>
            <?php } else { ?>
                <h2><?php echo $article['title']; ?></h2>
            <?php } ?>

            <p><?php echo $article['content']; ?></p>
            <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
        </article>




    </main>

<?php require_once('./partials/_footer.php'); ?>



