<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<p>Détail de l'article :</p>

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold"><?php echo htmlspecialchars($post->name); ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Crée le <?php echo DateTime::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d/m/Y') . " à " . DateTime::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('H:i:s');?></p>
            <p class="lead mb-4"><?php echo nl2br(htmlspecialchars($post->description)); ?></p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="index.php?action=addComment&idPost=<?= $post->id ?>"><button type="button" class="btn btn-primary btn-lg px-4 gap-3"">Commenter</button></a>
            </div><br>

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="index.php?action=editPostView&id=<?= $post->id ?>&isCommentable=0"><button type="button" class="btn btn-primary btn-lg px-4 gap-3"">Désactiver les commentaires</button></a>
            </div>

            <em>Les commentaires associés a cet article :</em>
            <?php
                foreach ($comments as $comment) {
                ?>
                    <div>
                        <?= $comment->description ?>
                        <a href="index.php?action=deleteComment&idComment=<?= $comment->id ?>&idPost=<?= $comment->id_article ?>" class="link-danger">
                            <i class="fas fa-times-circle"></i>
                        </a>
                    </div>
                    <?php
                }
            ?>
        </div>
        
    </div>
</body>
</html>