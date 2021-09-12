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

    public static function getPost($id) {
        $sql = 'SELECT * FROM article WHERE article.id =' . $id;

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetch(PDO::FETCH_OBJ);
    }

    public static function addPost($name, $desc, $category) {
        $sql = 'INSERT INTO article (name, description, categorie_id, created_at) VALUES (:name, :description, :categorie_id, NOW())';

        var_dump($sql);
        var_dump($name);
        var_dump($desc);
        var_dump($category);
        exit;

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute([
            'name' => $name,
            'description' => $desc,
            'categorie_id' => $category,
        ]);

        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}