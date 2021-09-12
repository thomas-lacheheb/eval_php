<?php

require_once '../db/Database.php';
require_once '../entity/Comment.php';

class CommentManager
{
    public static function findAll(){
        $sql = 'SELECT * FROM comments';

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getComment($id) {
        $sql = 'SELECT * FROM comment WHERE comment.id =' . $id;

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetch(PDO::FETCH_OBJ);
    }

    public static function getComments($id) {
        $sql = 'SELECT * FROM comment WHERE comment.id_article =' . $id;

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function addCommentForPost($description, $idPost)
    {
        $sql = 'INSERT INTO comment (description, id_article) VALUES (:description, :idPost)';

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute([
            'description' => $description,
            'idPost' => $idPost,
        ]);

        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function deleteComment($idComment)
    {
        $sql = 'DELETE FROM comment WHERE id = :idComment';

        $db = new Database();
        $co = $db->connexion();
        $req = $co->prepare($sql);
        $req->execute([
            'idComment' => $idComment
        ]);

        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}