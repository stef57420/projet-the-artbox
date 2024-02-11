<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <!-- HEADER -->
    <?php include('includes/header.php'); ?>

    <!-- OEUVRES DATAS -->
    <?php include_once('includes/oeuvres.php'); ?>

    <main>
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre) : ?>

                <?php if ($oeuvre['enabled']) : ?>

                    <!-- STRUCTURE DE L'ARTICLE OEUVRE -->
                    <article class="oeuvre">
                        <a href='oeuvre.php?id=<?php echo $oeuvre['id']; ?>'>
                            <?php if (isset($oeuvre['image'])) : ?>
                                <img src="img/<?php echo $oeuvre['image']; ?>" alt="<?php echo isset($oeuvre['alt']) ? $oeuvre['alt'] : ''; ?>">
                            <?php endif; ?>
                            <p class="description"><?php echo $oeuvre['author']; ?></p>
                        </a>
                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- FOOTER -->
    <?php include('includes/footer.php'); ?>
</body>

</html>
