<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<p>Détail de l'article :</p>
    <div class="news">
        <h3>
            Titre : <?php echo htmlspecialchars($post->name); ?><br>
        </h3>
        <h4>
            <em>
                Crée le <?php echo DateTime::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d/m/Y') . " à " . DateTime::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('H:i:s');?>
            </em>
        </h4>

        <h4>La description</h4>
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

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold"><?php echo htmlspecialchars($post->name); ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"><?php echo nl2br(htmlspecialchars($post->description)); ?></p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Commenter</button>
            </div>
            <em>Les commentaires associés a cet article :</em>
            <?php
                foreach ($comments as $comment) {
                ?>
                    <h3><?= $comment->description ?></h3>
                    <?php
                }
            ?>
        </div>
        
    </div>
</body>
</html>