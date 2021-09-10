<?php

require_once '../db/Database.php';
require_once '../entity/Category.php';

class CategoryManager extends Category
{
    public static function findAll(){
        $sql = 'SELECT * FROM category';

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function postCategory($name) {
        $sql = 'INSERT INTO category (name) VALUES (:n)';

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute([
            'n' => $name,
        ]);

        $affectedLines = $req->execute();
        return $affectedLines;
    }

}