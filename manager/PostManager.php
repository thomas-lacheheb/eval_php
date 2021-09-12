<?php

require_once '../db/Database.php';
require_once '../entity/Post.php';

class PostManager extends Post
{
    public static function findAll(){
        $sql = 'SELECT * FROM post';

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getPost($id) {
        $sql = 'SELECT * FROM post WHERE post.id =' . $id;

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetch(PDO::FETCH_OBJ);
    }

    public static function addPost($name, $desc, $category) {
        $sql = 'INSERT INTO post (name, description, categorie_id, created_at) VALUES (:name, :description, :categorie_id, NOW())';

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