<!doctype html>
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
        <!-- STRUCTURE DE L'ARTICLE OEUVRE -->
        <?php
        // Vérifier si l'ID est passé dans la requête GET
        if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $id = $_GET['id'];

            // Vérifier si l'ID correspond à une œuvre existante
            if (isset($oeuvres[$id - 1]) && $oeuvres[$id - 1]['enabled']) {
                $oeuvre = $oeuvres[$id - 1];
        ?>
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <?php if (isset($oeuvre['image']) && file_exists("img/{$oeuvre['image']}")) : ?>
                            <img src="img/<?php echo $oeuvre['image']; ?>" alt="<?php echo isset($oeuvre['alt']) ? $oeuvre['alt'] : ''; ?>">
                        <?php else : ?>
                            <p>Image non disponible</p>
                        <?php endif; ?>
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $oeuvre['titre']; ?></h1>
                        <p class="description"><?php echo $oeuvre['author']; ?></p>
                        <p class="description-complete"><?php echo $oeuvre['texte']; ?></p>
                    </div>
                </article>
            <?php } else { ?>
                <article class="erreur">
                    <p class="essai">Cette œuvre n'est pas disponible pour le moment.</p>
                </article>
            <?php }
        } else { ?>
            <article class="erreur">
                <p class="essai">L'ID de l'œuvre n'est pas valide.</p>
            </article>
        <?php } ?>
    </main>

    <!-- FOOTER -->
    <?php include('includes/footer.php'); ?>
</body>

</html>
