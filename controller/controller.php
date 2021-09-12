<?php

// Chargement des classes
require_once('../manager/PostManager.php');
require_once('../manager/CommentManager.php');
require_once('../manager/CategoryManager.php');

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->findAll(); // Appel d'une fonction de cet objet
    require('../view/listPostsView.php');
}

function addPostView()
{
    $categoryManager = new CategoryManager();
    $categories = $categoryManager->findAll();
    require('../view/addPostView.php');
}

function addPost()
{
    $postManager = new PostManager();
    $newPost = $postManager->addPost($_POST['name'], $_POST['description'], $_POST['category']);

    if ($newPost === false) {
        throw new Exception('Impossible d\'ajouter l\'article !');
    } else {
        header('Location: index.php?action=listPost');
    }
}

function editPostView()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('../view/editPostView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function listCategories()
{
    $categoryManager = new CategoryManager(); // Création d'un objet
    $categories = $categoryManager->findAll(); // Appel d'une fonction de cet objet
    require('../view/listCategoriesView.php');
}

function addCategoryView()
{
    require('../view/addCategoryView.php');
}

function addCategory($name)
{
    $categoryManager = new categoryManager();
    $affectedLines = $categoryManager->postCategory($name);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter la categorie !');
    } else {
        header('Location: index.php?action=listCategory');
    }
}