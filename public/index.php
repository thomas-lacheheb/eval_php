<?php
require('../controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'addCategory') {
        if (!empty($_POST['name'])) {
            addCategory($_POST['name']);
        }
        else {
            echo 'Erreur : tous les champs ne sont pas remplis !';
        }
    }
}
else {
    listPosts();
}