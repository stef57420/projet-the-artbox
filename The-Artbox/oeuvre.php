<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include('includes/header.php'); ?>
<main>
<?php include('includes/oeuvres.php'); ?>
<?php foreach ($oeuvres as $oeuvre) : ?>
<?php if($_GET['id'] == $oeuvre['id']): ?>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
        <img src="img/<?php echo $oeuvre['image']?>" alt="<?php echo $oeuvre['alt']?>">              
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['titre']?></h1>
            <p class="description-complete"><?php echo $oeuvre['description']?></p>
        </div>
    </article>
<?php endif; ?>
<?php endforeach ?>  
</main>
<?php include('includes/footer.php'); ?>
</body>
</html>