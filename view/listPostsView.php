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
            <em><a href="index.php?action=editPostView&id=<?=$post->id?>" >Voir le détail de l'article</a></em>
        </p>
    </div>
    <?php
}
?>

<a href="index.php?action=addPost" class="link-primary">Ajouter un article</a>