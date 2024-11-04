<?php require_once('../view/partials/_header.php'); ?>


<main>

    <?php if ($profile['isPublished']) { ?>

        <h2><?php echo $profile['firstName']; ?></h2>
        <p><?php echo $profile['lastName']; ?></p>
        <p><?php echo $profile['age']; ?></p>
        <p><?php echo $profile['job']; ?></p>

        <p>Compétences :</p>

        <?php foreach ($profile['skills'] as $skill) { ?>

            <p><?php echo $skill; ?></p>

        <?php } ?>

    <?php } else { ?>

        <p>Profil non publié</p>

    <?php }  ?>


</main>

<?php require_once('../view/partials/_footer.php'); ?>
