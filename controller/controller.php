<?php

// Chargement des classes
require_once('../manager/PostManager.php');
require_once('../manager/CommentManager.php');
require_once('../manager/CategoryManager.php');

function viewHomePage()
{
    require('../view/homepage.php');
}

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
        header('Location: index.php?action=listPosts');
    }
}

function editPostView($isCommentable = 1)
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('../view/editPostView.php');
}

function addCommentView()
{
    require('../view/addCommentView.php');
}

function addComment()
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->addCommentForPost($_POST['description'], $_GET['idPost']);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=editPostView&id=' . $_GET['idPost']);
    }
}

function deleteComment()
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->deleteComment($_GET['idComment']);

    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer le commentaire !');
    }
    else {
        header('Location: index.php?action=editPostView&id=' . $_GET['idPost']);
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

function addCategory()
{
    $categoryManager = new categoryManager();
    $affectedLines = $categoryManager->postCategory($_POST['name']);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter la categorie !');
    } else {
        header('Location: index.php?action=listCategory');
    }
}