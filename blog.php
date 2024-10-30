<?php

$articles = ['article 1', 'article 2', 'article 3'];

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
                <h2><?php echo $article; ?></h2>
            </article>

        <?php } ?>



    </main>

</body>
</html>




