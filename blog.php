<?php

$articles = [
    "1" => [
        "title" => "Article 1",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "blalblalblalb"
    ],
    "2" => [
        "title" => "Article 2",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "blalblalblalb"
    ],
    "3" => [
        "title" => "Article 2",
        "image" => "https://img.freepik.com/psd-premium/color-wing-png-isole-fond-transparent_1034016-9965.jpg",
        "content" => "blalblalblalb"
    ]
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>

        <h1>Les articles du blog</h1>

        <?php foreach ($articles as $article) { ?>

            <article>
                <h2><?php echo $article['title']; ?></h2>
                <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" />
                <p><?php echo $article['content']; ?></p>
            </article>

        <?php } ?>



    </main>

</body>
</html>




