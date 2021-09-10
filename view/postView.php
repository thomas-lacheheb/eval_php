<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<h1>Blog crée par MEBARKI Mehdi et LACHEHEB Thomas !</h1>
<p>Détail de l'article :</p>
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
            <em><a href="#">Les commentaires associés a cet article :</a></em>
            <?php
            foreach ($comments as $comment) {
            ?>
                <h3><?= $comment->description ?></h3>
                <?php
            }
            ?>
        </p>
    </div>
</body>
</html>