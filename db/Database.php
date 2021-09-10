<?php

class Database
{
    const HOSTNAME = 'db';
    private $db = 'blog';
    const USERNAME = 'root';
    const PASSWORD = '';

    public function connexion(){
        try{
            return new PDO('mysql:host='.self::HOSTNAME.';dbname='.$this->db, self::USERNAME, self::PASSWORD);
        }
        catch(Exception $e){
            die('Erreur : '. $e->getMessage());
        }
    }

}