<?php

require_once '../db/Database.php';
require_once '../entity/Post.php';

class PostManager extends Post
{
    public static function findAll(){
        $sql = 'SELECT * FROM article';

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function addOne(Category $category) {
        var_dump($category);
        die();
        $sql = 'SELECT * FROM article';

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getPost($id) {
        $sql = 'SELECT * FROM article WHERE article.id =' . $id;

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetch(PDO::FETCH_OBJ);
    }
}