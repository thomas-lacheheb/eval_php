<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<h1>Blog crée par MEBARKI Mehdi et LACHEHEB Thomas !</h1>
<p>Les derniers billets du blog :</p>


<?php
foreach ($posts as $post)
{
    ?>
    <div class="news">
        <h3>
            <?php echo htmlspecialchars($post->name); ?>
            <em>le <?php echo $post->created_at; ?></em>
        </h3>

        <p>
            <?php
            echo nl2br(htmlspecialchars($post->description));
            ?>
            <br />
            <em><a href="index.php?action=post&id=<?=$post->id?>" >Voir le détail de l'article</a></em>
        </p>
    </div>
    <?php
}
?>

<!-- ... -->

<h2>Ajouter une catégorie</h2>

<form action="index.php?action=addCategory" method="post">
    <div>
        <label for="name">Nom de la catégorie</label><br />
        <input type="text" id="name" name="name" />
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<!-- ... -->

</body>
</html>