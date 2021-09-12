<body>
    <h2>Ajouter un article</h2>

    <form action="index.php?action=addPost" method="post">
        <div>
            <div class="mb-3">
                <label for="name" class="form-label">Titre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Votre titre">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description de la catégorie</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <select class="form-select" id="category" name="category">
                <?php
                    foreach ($categories as $category)
                    {
                ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php
                    } 
                ?>
                </select>
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Valider</button>
        </div>
    </form>
</body>
</html>