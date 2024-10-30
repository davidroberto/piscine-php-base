<?php

$articles = [
    "1" => [
        "title" => "Article 1",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "blalblalblalb",
        "isPublished" => true
    ],
    "2" => [
        "title" => "Article 2",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "blalblalblalb",
        "isPublished" => false
    ],
    "3" => [
        "title" => "Article 3",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "blalblalblalb",
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
                    <p><?php echo $article['content']; ?></p>
                </article>
            <?php } ?>

        <?php } ?>



    </main>

<?php require_once('./partials/_footer.php'); ?>



