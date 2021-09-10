<h3>Liste des catégories : </h3>

<ul class="list-group">
<?php
    foreach ($categories as $category)
    {
        ?>
        <li class="list-group-item">
                <?php
                    echo nl2br(htmlspecialchars($category->name));
                ?>
        </li>
        <?php
    }
?>
</ul>


<a href="index.php?action=addCategory" class="link-primary">Ajouter une catégorie</a>