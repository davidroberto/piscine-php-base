<?php

$articles = [
    "1" => [
        "title" => "Article 1",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia provident, repellendus. Adipisci architecto, commodi earum expedita facilis magnam, maxime, minima minus modi nulla porro quia rem suscipit unde ut voluptatem.",
        "isPublished" => true
    ],
    "2" => [
        "title" => "Article 2",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "blalblalblalb blabla",
        "isPublished" => true
    ],
    "3" => [
        "title" => "Article 3",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia provident, repellendus. Adipisci architecto, commodi earum expedita facilis magnam, maxime, minima minus modi nulla porro quia rem suscipit unde ut voluptatem.",
        "isPublished" => true
    ]
];

?>

<?php require_once('./partials/_header.php'); ?>


    <main>

        <h1>Les articles du blog</h1>

        <?php foreach ($articles as $article) { ?>

            <?php if ($article['isPublished'] === true) { ?>
                <article>
                    <h2><?php echo $article['title']; ?></h2>
                    <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" />

                    <?php if (mb_strlen($article['content'], 'UTF-8') > 50) { ?>

                        <p>Contenu trop long</p>

                    <?php } else { ?>

                        <p><?php echo $article['content']; ?></p>

                    <?php } ?>

                </article>
            <?php } ?>

        <?php } ?>




    </main>

<?php require_once('./partials/_footer.php'); ?>



