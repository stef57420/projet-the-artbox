<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/style.css" />
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

        <?php if (array_key_exists('enabled', $oeuvre) && $oeuvre['enabled']) : ?>

          <!-- STRUCTURE DE L'ARTICLE OEUVRE -->

          <!-- <article class="oeuvre">
                <a href="lien vers la page de l'oeuvre">
                    <img src="chemin de l'image de l'oeuvre" alt="alt de l'oeuvre" />
                    <h2>Titre de l'oeuvre</h2>
                    <p class="description">Auteur de l'oeuvre</p>
                </a>
            </article> -->

          <article class="oeuvre">
            <a href='oeuvre.php?id=<?php echo $oeuvre['id']; ?>'>
              <img src=<?php echo $oeuvre['image']; ?> alt=<?php echo $oeuvre['alt']; ?>>
              <h2><?php echo $oeuvre['titre']; ?></h2>
              <p class="description"><?php echo $oeuvre['author']; ?></p>
            </a>
          </article>
        <?php endif; ?>
      <?php endforeach ?>
    </div>
  </main>
  <!-- FOOTER -->
  <?php include('includes/footer.php'); ?>
</body>

</html>