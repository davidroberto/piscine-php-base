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

        <?php if ($_POST['title'] &&
            $_POST['content'] &&
            $_POST['image'] &&
            mb_strlen($_POST['title']) > 3&&
            mb_strlen($_POST['content']) > 4 &&
            mb_strlen($_POST['image']) > 2
        ) { ?>

            <?php

                // je créé un tableau contenant toutes mes valeurs
                // issues du formulaire
                $article = [
                    "title" => $_POST['title'],
                    "content" => $_POST['content'],
                    "image" => $_POST['image'],
                ];

                // je récupère le chemin du fichier json
                // qui servira à stocker les données
                $path = './articles.json';

                // je convertis mon article en json
                $jsonString = json_encode($article,JSON_PRETTY_PRINT);

                // j'ouvre le fichier json, je stocke mon article
                // dedans et je ferme le fichier json
                $fp = fopen($path, 'w');
                fwrite($fp, $jsonString);
                fclose($fp);
            ?>


        <?php } else { ?>
            <p>Attention, les données ne sont pas valides</p>
        <?php } ?>

    <?php } ?>

</main>

<?php require_once('./partials/_footer.php'); ?>
