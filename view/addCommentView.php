<body>
    <h2>Ajouter un commentaire</h2>

    <form action="index.php?action=addComment&idPost=<?= $_GET['idPost'] ?>" method="post">
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Valider</button>
        </div>
    </form>
</body>
</html>