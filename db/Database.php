<?php

class Database
{
    const HOSTNAME = 'db';
    const HOSTNAME_LOCAL = '127.0.0.1';
    private $db = 'blog';
    const USERNAME = 'root';
    const PASSWORD = '';

    public function connexion(){
        try{
            // return new PDO('mysql:host='.self::HOSTNAME.';dbname='.$this->db, self::USERNAME, self::PASSWORD);
            return new PDO('mysql:host='.self::HOSTNAME_LOCAL.';dbname='.$this->db, self::USERNAME, self::PASSWORD);
        }
        catch(Exception $e){
            die('Erreur : '. $e->getMessage());
        }
    }

}